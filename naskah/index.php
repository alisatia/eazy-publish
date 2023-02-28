<?php
session_start();
if( !isset($_SESSION["id_user"]) ) {
	header("Location: ../../");
	exit;
}
?>
<?php
require '../conn.php';
$id = $_SESSION['id_user'];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user= '$id'");
$user = mysqli_fetch_array($result);
$email = $user['email'];
$penulis = mysqli_query($conn, "SELECT * FROM penulis WHERE email= '$email'");
$data = mysqli_fetch_array($penulis);
$idpenulis = $data['id_penulis'];
$bukudone = mysqli_query($conn, "SELECT * FROM buku_done WHERE id_penulis = $idpenulis");
$bookdone = mysqli_query($conn, "SELECT COUNT(*) FROM buku_done WHERE id_penulis = $idpenulis AND status = 'Publish'");
$count = mysqli_fetch_array($bookdone);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Naskah</title>
</head>
<body> 
    <div class="container">
        <!-- navbar -->
        <div class="navbar">
            <div class="logo-profil">
                <div class="logo"></div>
            </div>
            <div class="blank-profil"></div>
            <div class="blank-profil-2"></div>
            <a class="profil" href="../user/profil/">
                <div class="blank-box-profil-1"></div>
                <div class="blank-box-profil-2"></div>
                <div class="box-profil">
                    <div class="username"><?php echo $user['username'] ?></div>
                    <div class="avatar">
                        <img src="../gambar/<?php echo $data['file_foto']?>" alt="">
                    </div>
                </div>
            </a>
        </div>
        
        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidedas">
                <div class="blank-1"></div>
                <div class="blank-3"></div>
                <a href="../user/dasboard/" class="dasboard">
                    <div class="box-dasboard"></div>
                    <div class="dasb">Dasboard</div>
                </a>
                <a href="../status/" class="status">
                    <div class="box-status"></div>
                    <div class="stat">Status</div>
                </a>
                <a href="../naskah/" class="naskah">
                    <div class="box-naskah"></div>
                    <div class="nask">Naskah</div>
                </a>
                <a href="../cekharga/" class="cek-harga">
                    <div class="box-cek-harga"></div>
                    <div class="harg">Cek Harga</div>
                </a>
                <a href="../guidelines/" class="guidelines">
                    <div class="box-guidelines"></div>
                    <div class="guid">Guidelines</div>
                </a>
                <div class="logout">
                    <a href="../login/logout.php"class="box-logout"></a>
                    <div class="logg">Logout</div>
                </div>
            </div>
            <div class="blank-2">
                <a href="../login/logout.php"class="box-logout"></a>
            </a>
            </div>
        </div>
 
        <!-- content -->
        <div class="content">
            <div class="blank-content-1"></div>
            <div class="blank-content-2"></div>
            <div class="box-content">
                <div class="blank-box-content"></div>
                <div class="nametag">Naskah</div>
                <div class="naskah-content">
                    <div class="box-naskah-content">
                        <div class="buku-blank"><?php  echo $data['nama'] ?></div>
                            <?php if(isset($_GET['id'])) { ?>
                                <?php
                                $id = $_GET['id'];
                                $judul = $_GET['judul'];

                                $sql = mysqli_query($conn, "SELECT * FROM buku_done WHERE id_done = '$id' ");
                                $result = mysqli_fetch_array($sql);

                                $query = mysqli_query($conn, "SELECT * FROM buku WHERE judul = '$judul' ");
                                $res = mysqli_fetch_array($query);         

                                $cover = $result['cover'];
                                $harga = $result['harga'];
                                $kategori = $res['kategori'];
                                $tahun = $result ['tahun'];
                                $halaman = $result['halaman'];
                                $ukuran = $result['ukuran'];
                                $isbn = $res['isbn'];
                                $eisbn =$res['e_isbn'];
                                $royalti =$res['royalti'];
                                $bw = $result['bw'];
                                $fc = $result['fc'];

                                $que = mysqli_query($conn, "SELECT * FROM buku WHERE judul = '$judul' ");

                                ?>
                                <div class="box-detail">
                                    <img class="cover" src="../filecover/<?php echo $cover ?>" alt=""> 
                                    <div class="detail-1">
                                        <div class="grid1">
                                            <div class="grid1-1" ><?php echo $judul ?></div>
                                                <div class="penulisss">
                                                    <?php while($quee = mysqli_fetch_array($que)) { ?>
                                                        <p><?php echo $quee['penulis']; echo "," ?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <div class="grid2">
                                            <div></div>
                                            <div></div>
                                            <p>Kategori</p>
                                            <div>: <?php echo $kategori ?></div>
                                            <p>Tahun Terbit</p>
                                            <div>: <?php if($tahun == 0) { echo "proses"; } else { echo  $tahun; }?></div>
                                            <p>ISBN</p>
                                            <div>: <?php if($isbn == "yes") { echo "proses"; } elseif ($isbn == "no") { echo "-"; } else { echo  $isbn; }?></div>
                                            <p>E-ISBN</p>
                                            <div>: <?php if($eisbn == "yes") { echo "proses";} elseif ($eisbn == "no") { echo "-"; } else { echo $eisbn; } ?></div>
                                            <p>Royalti</p>
                                            <div>: <?php if($royalti == "yes") { echo "proses"; } elseif ($royalti == "no") { echo "-"; } else  { echo $royalti; } ?></div>
                                            <p>Jumlah Halaman</p>
                                            <div>: <?php if($halaman == 0) { echo "-"; } else { echo $halaman; } ?></div> 
                                            <p>Halaman FC</p>
                                            <div>: <?php if($fc == 0) { echo "-"; } else { echo $fc; } ?></div>
                                            <p>Halaman BW</p>
                                            <div>: <?php if($bw == 0) { echo "-"; } else { echo $bw; } ?></div>
                                        </div>
                                    </div>
                                    <div class="detail2">
                                        <img src="../assets/bookok.png" alt="">
                                    </div>
                                </div>
                            <?php } else { ?>
                                <?php if($count['COUNT(*)'] >= 1) { ?>
                                    <div class="box-buku">   
                                        <?php while($books = mysqli_fetch_array($bukudone)) { ?>
                                            <a href="control.php?id=<?php echo $books['id_done'] ?>" class="isi-book">
                                                <img src="../filecover/<?php echo $books['cover'] ?>"  alt="">
                                            </a>
                                        <?php } ?> 
                                    </div>
                                <?php } else { ?>
                                    <div class="box-sorry">
                                        <div class="sorry">
                                            <div class="sorryy">
                                                <img src="../assets/sorry.png" alt="">
                                                <div>Mohon maaf buku anda belum ada yang di publish</div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- right content -->
        <div class="rightcontent"> 

            <!-- media -->
            <div class="media">
                <div class="box-media">
                    <div class="text-media"></div>
                    <div class="itbpress">
                        <a href="https://www.itbpress.id/" class="icon-itbpress"></a>
                        <div class="itbp">ITB Press</div>
                    </div>
                    <div class="tokopedia">
                        <a href="https://www.tokopedia.com/itbpress" class="icon-tokopedia"></a>
                        <div class="tokp">Tokopedia</div>
                    </div>
                    <div class="moco">
                        <a href="#" class="icon-moco"></a>
                        <div class="mocc">Moco</div>
                    </div>
                    <div class="blank-media"></div>
                </div>
            </div>
            <div class="blank-right-1"></div>
            <div class="blank-right-2"></div>
        </div>
    </div>
</body>
</html>