<?php 
require('../conn.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($conn, "SELECT * FROM buku_done WHERE id_done = '$id' ");
    $result = mysqli_fetch_array($sql);

    $judul = $result['judul'];

    $query = mysqli_query($conn, "SELECT * FROM buku WHERE judul = '$judul' ");
    $res = mysqli_fetch_array($query);

    header("Location: index.php?id=$id&judul=$judul");
    exit();
}

?>