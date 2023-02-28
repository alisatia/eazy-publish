<?php
require('../conn.php');
$id = $_POST['id'];
$status = $_POST['selected'];

$sql = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku = '$id'");
$res = mysqli_fetch_array($sql);
$book  = $res['judul'];
$books = mysqli_query($conn, "SELECT * FROM buku WHERE judul = '$book'");
$count = mysqli_query($conn, "SELECT COUNT(*) FROM buku_done WHERE judul = '$book' ");
$con = mysqli_fetch_array($count);

if($con['COUNT(*)'] == 0 ){
    while($result = mysqli_fetch_array($books)) {
        $idbuku = $result['id_buku'];
        $judul = $result['judul'];
        $penulis = $result['penulis'];
        $idpenulis = $result['id_penulis'];
        $create = mysqli_query($conn, "INSERT INTO  buku_done (judul, penulis, mou, cover, harga, hpp, tahun, halaman, ukuran, bw, fc, status, id_buku, id_penulis) VALUE ('$judul', '$penulis', '', 'noimage.jpg', '', '', '', '', '', '', '', '', '$idbuku', '$idpenulis')");
    }
}

if($status == "Rejected") {
    $delete = mysqli_query($conn, "DELETE FROM buku_done WHERE judul = '$book'");
}

if($status == "Publish") {
    $update = mysqli_query($conn, "UPDATE buku_done SET status='$status' WHERE judul = '$book'");
}

if(isset($_POST['selected'])) {
    $up = mysqli_query($conn, "UPDATE buku SET status='$status' WHERE id_buku = '$id' ");
    header("Location: index.php?id=$id");
}
?>