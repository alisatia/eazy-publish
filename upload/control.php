<?php
session_start();
require '../conn.php';
$id = $_SESSION['id_user'];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user= '$id'");
$user = mysqli_fetch_array($result);
$email = $user['email'];
$penulis = mysqli_query($conn, "SELECT * FROM penulis WHERE email= '$email'");
$data = mysqli_fetch_array($penulis);
$idpenulis = $data['id_penulis'];

$no = $_POST['penulis'];
$judul = $_POST['judul-buku'];
$kategori = $_POST['kategori-buku'];
$jml = $_POST['jmlpenulis'];

$file = $_FILES['file'];

$fileName = $_FILES['file']['name'];
$fileTmpName = $_FILES['file']['tmp_name'];
$fileSize = $_FILES['file']['size'];
$fileError = $_FILES['file']['error'];
$fileType = $_FILES['file']['type'];

$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));

$allowed = array('docx', 'doc');

if(isset($_POST['eisbn']) && $_POST['eisbn'] == 'yes') {
    $eisbn = "yes";
} else {
    $eisbn = "no";
}
if(isset($_POST['isbn']) && $_POST['isbn'] == 'yes') {
    $isbn = "yes";
} else {
    $isbn = "no";
}
if(isset($_POST['royalti']) && $_POST['royalti'] == 'yes') {
    $royalti = "yes";
} else {
    $royalti = "no";
}

if(isset($_POST['upload-naskah'])) {
    if($jml > 0) {
        $penulis = $_POST['penuliske1'];

        if(in_array($fileActualExt, $allowed)) {
            if($fileError === 0) {
                if($fileSize < 100000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = '../filenaskah/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                    $upload = mysqli_query($conn, "INSERT INTO buku (judul, kategori, penulis, naskah, sinopsis, isbn, e_isbn, royalti, status, id_penulis) VALUE ('$judul', '$kategori', '$penulis', '$fileNameNew', '', '$isbn', '$eisbn', '$royalti', 'Review', '$idpenulis')");
                } else{
                    header("Location: index.php?sip&jdl=$judul&ktg=$kategori&isbn=$isbn&eisbn=$eisbn&royalti=$royalti&file=upload file kurang dari 100mb");
                    exit;
                }
            } else {
                header("Location: index.php?sip&jdl=$judul&ktg=$kategori&isbn=$isbn&eisbn=$eisbn&royalti=$royalti&file=ulangi upload");
                exit;
            }
        } else {
            header("Location: index.php?sip&jdl=$judul&ktg=$kategori&isbn=$isbn&eisbn=$eisbn&royalti=$royalti&file=upload format docx / doc");
            exit;
        }

        if($jml >= 2) {
            while($jml > 1) {
                $penulisloop = $_POST["penuliske$jml"];
                $uploadloop = mysqli_query($conn, "INSERT INTO buku (judul, kategori, penulis, naskah, sinopsis, isbn, e_isbn, royalti, status, id_penulis) VALUE ('$judul', '$kategori', '$penulisloop', '$fileNameNew', '', '$isbn', '$eisbn', '$royalti', '', '')");
                $jml--;
            }
        }
        header("Location: ../status/");
        exit();
    } else {
        header("Location: index.php?sip&error&jdl=$judul&ktg=$kategori&isbn=$isbn&eisbn=$eisbn&royalti=$royalti");
        exit();
    }
}

if(isset($_POST['penulis'])) {
    header("Location: index.php?sip&jml=$no&jdl=$judul&ktg=$kategori&isbn=$isbn&eisbn=$eisbn&royalti=$royalti");
    exit();
 }

?>