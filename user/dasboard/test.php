<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include '../../conn.php';
$result = mysqli_query($conn, "SELECT * FROM buku ORDER BY id_buku DESC");
$res = mysqli_fetch_array($result);
echo $res['judul']; echo $res['id_buku'] ?>

<table class="table table-striped border">
<thead class="table-light">
    <tr>
    <th scope="col">Id</th>
    <th scope="col">Judul</th>
    <th scope="col">Kategori</th>
    <th scope="col">Status</th>
    </tr>
</thead>
<tbody>
    <?php 
    $no = 1;
        while($res = mysqli_fetch_array($result)) { 		
            echo "<tr>";
            echo "<td>".$no."</td>";
            echo "<td>".$res['judul']."</td>";
            echo "<td>".$res['kategori']."</td>";
            echo "<td>".$res['status']."</td>";
            $no++;
        }
    ?>
</tbody>
</table>
</body>
</html>