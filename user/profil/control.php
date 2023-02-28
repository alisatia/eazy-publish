<?php
session_start();
require '../../conn.php';
$id = $_SESSION['id_user'];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user= '$id'");
$user = mysqli_fetch_array($result);
$email = $user['email'];

if(isset($_POST['nama-penulis']) || isset($_POST['phone-penulis']) || isset($_POST['kontak-penulis']) || isset($_POST['jabatan-penulis']) || isset($_POST['instansi-penulis'])) {
    $nama = $_POST['nama-penulis'];
    $phone = $_POST['phone-penulis'];
    $kontak = $_POST['kontak-penulis'];
    $jabatan = $_POST['jabatan-penulis'];
    $instansi = $_POST['instansi-penulis'];
    $upupdate = mysqli_query($conn, "UPDATE penulis SET nama = '$nama', phone = '$phone', kontak_lain = '$kontak', jabatan='$jabatan', instansi = '$instansi' WHERE email = '$email'");
    header("Location: index.php");
    exit;
}
if(isset($_POST['biografi-penulis'])) {
    $biografi = $_POST['biografi-penulis'];
    $bio = mysqli_query($conn, "UPDATE penulis SET biografi='$biografi' WHERE email = '$email'");
    header("Location: index.php");
    exit;
}
if(isset($_FILES['file'])) {
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
	$fileTmpName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
	$fileActualExt = strtolower(end($fileExt));

    $allowed = array('png', 'jpg');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
            if($fileSize < 10000000) {
                $fileNameNew = uniqid('', true).".".$fileActualExt;
                $fileDestination = '../../gambar/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                $upimg = mysqli_query($conn, "UPDATE penulis SET file_foto='$fileNameNew' WHERE email = '$email'");
                header("Location: index.php");
                exit;
            } else{
                header("Location: index.php?error=ukuran lebih <br>dari 10mb");
                exit;
            }
        } else {
            header("Location: index.php?error=upload gagal");
            exit;
        }
    } else {
        header("Location: index.php?error=silahkan upload <br>format jpg / png");
        exit;
    }
}
?>