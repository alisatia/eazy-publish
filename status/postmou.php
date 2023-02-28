<?php
require('../conn.php');
if(isset($_POST['send'])) {
    $id = $_POST['id-book'];
    $sql = mysqli_query($conn, "UPDATE buku SET status='Editing & Layouting' WHERE id_buku='$id'");
    header("Location: index.php?id=$id");
}
?>