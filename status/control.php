<?php
if(isset($_POST['listbuku'])) {
    $id = $_POST['id-buku'];
    header("Location: index.php?id=$id");
}
?>