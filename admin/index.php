<?php
require('../conn.php');
$sql = mysqli_query($conn, "SELECT * FROM buku WHERE id_penulis NOT IN ('0')");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Admin</title>
</head>
<body>
        <?php if(isset($_GET['id']) && $_GET['id'] >= 0) { ?>
            <?php
                $id = $_GET['id'];
                $sqlbuku = mysqli_query($conn, "SELECT * FROM buku WHERE id_buku = '$id'");
                $books = mysqli_fetch_array($sqlbuku);
                $idbuku = $books['id_buku'];
                $judul = $books['judul'];
                $status = $books['status'];
                $download = $books['naskah'];
            ?>
            <form action="control.php" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $idbuku ?>">
                <p><?php echo $judul ?></p>
                <a href="download.php?name=<?php echo $judul ?>&file=<?php echo $download ?>">Download Naskah</a><br><br>
                <select name="selected" id="selected" onchange="this.form.submit()">
                    <option value="db"><?php echo $status ?></option>
                    <option value="Review">Review</option>
                    <option value="Meet">Meet</option>
                    <option value="MoU">MoU</option>
                    <option value="Editing & Layouting">Editing & Layouting</option>
                    <option value="Pendaftaran ISBN">Pendaftaran ISBN</option>
                    <option value="Produksi">Produksi</option>
                    <option value="Publish">Publish</option>
                    <option value="Rejected">Rejected</option>
                </select>
            </form>
        <?php } else { ?>
            <?php while($result = mysqli_fetch_array($sql)) { ?>
                <a href="index.php?id=<?php echo $result['id_buku'] ?>"><?php echo $result['judul'] ?></a>
                <br>
            <?php } ?>
        <?php } ?>
<script src="script.js"></script>
</body>
</html>