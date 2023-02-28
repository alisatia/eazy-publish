<?php 
session_start();

if( !isset($_SESSION["id_user"]) ) {
	header("Location: ../../");
	exit;
}
?>
<?php 
require '../../conn.php';

// koneksi ke database
// database user
$penulis = $_SESSION['id_user'];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user= '$penulis'");
$data = mysqli_fetch_array($result);
// databse penulis
$email = $data['email'];
$datapenulis = mysqli_query($conn, "SELECT * FROM penulis WHERE email= '$email'");
$itempenulis = mysqli_fetch_array($datapenulis);
// database buku
$idpenulis = $itempenulis['id_penulis'];
$buku = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM buku WHERE id_penulis = '$idpenulis'"));
// //review
$review = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM buku WHERE id_penulis = '$idpenulis' AND status = 'Review'"));
// //proses
$meet = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM buku WHERE id_penulis = '$idpenulis' AND status = 'Meet'"));
$mou = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM buku WHERE id_penulis = '$idpenulis' AND status = 'MoU'"));
$editing = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM buku WHERE id_penulis = '$idpenulis' AND  status = 'Editing & Layouting'"));
$isbn = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM buku WHERE id_penulis = '$idpenulis' AND status = 'Pendaftaran ISBN'"));
$produksi = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM buku WHERE id_penulis = '$idpenulis' AND status = 'Produksi'"));
$totalproses = $meet['COUNT(*)'] + $mou['COUNT(*)'] + $editing['COUNT(*)'] + $isbn['COUNT(*)'] + $produksi['COUNT(*)'];
// //done
$done = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM buku WHERE id_penulis = '$idpenulis' AND status = 'Publish'"));
// //rejected
$rejected = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM buku WHERE id_penulis = '$idpenulis' AND status = 'Rejected'"));
// //database last naskah
$tabel = mysqli_query($conn, "SELECT * FROM `buku` WHERE id_penulis = '$idpenulis' ORDER BY id_buku DESC LIMIT 2");
$tabels = mysqli_fetch_array($tabel);
$no = 2;
// //Jika tidak ada item
$jika = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM buku WHERE id_penulis = '$idpenulis'"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Dasboard</title>
</head>
<body>
    <div class="container">
        <!-- navbar -->
        <div class="navbar">
            <div class="blank-profil"></div>
            <div class="blank-profil-2"></div>
            <a class="profil" href="../../user/profil/">
                <div class="blank-box-profil-1"></div>
                <div class="blank-box-profil-2"></div>
                <div class="box-profil">
                    <div class="username"><?php echo $data['username'] ?></div>
                    <div class="avatar">
                        <img src="../../gambar/<?php echo $itempenulis['file_foto']?>" alt="">
                    </div>
                </div>
            </a>
        </div>
        
        <!-- sidebar -->
        <div class="sidebar">
            <div class="side"></div>
            <div class="sidedas">
                <div class="logo"></div>
                <div class="menu">Menu</div>
                <a href="../../user/dasboard/" class="dasboard">
                    <div class="icon-nav-1"></div>
                    <div class="text-dasboard">Dasboard</div>
                </a>
                <a href="../../status/" class="status">
                    <div class="icon-nav-2"></div>
                    <div class="text-status">Status</div>
                </a>
                <a href="../../naskah/" class="naskah">
                    <div class="icon-nav-3"></div>
                    <div class="text-naskah">Naskah</div>
                </a>
                <a href="../../cekharga/" class="cek-harga">
                     <div class="icon-nav-4"></div>
                     <div class="text-cek-harga">Cek Harga</div>
                </a>
                <a href="../../guidelines/" class="guidelines">
                    <div class="icon-nav-5"></div>
                    <div class="text-guidelines">Guidelines</div>
                </a>
                <div class="blank"></div>
            </div>
            <div class="logout">
                <div class="box-logout-1"></div>
                <div class="box-logout-2"></div>
                <div class="box-logout-3"></div>
                <div class="box-logout-4"></div>
                <a class="box-logout" href="../../login/logout.php">
                    <div class="icon-logout"></div>
                    <div class="text-logout">Logout</div>
                </a>
            </div>
        </div>

        <!-- content -->
        <div class="content">
            <div class="blank-content-1"></div>
            <div class="blank-content-2"></div>
            <div class="box-content">
                <div class="blank-box-content"></div>
                <div class="nametag">Profil Statistik</div>
                <div class="review">
                    <div class="box-review">
                        <div class="icon-review">
                            <div class="icon-img-review"></div>
                        </div>
                        <div class="value-review"><?php echo $review['COUNT(*)'] ?></div>
                        <div class="text-review">Naskah Review</div>
                    </div>
                </div>
                <div class="proses">
                    <div class="box-proses">
                        <div class="icon-proses">
                            <div class="icon-img-proses"></div>
                        </div>
                        <div class="value-proses"><?php echo $totalproses ?></div>
                        <div class="text-proses">Naskah Proses</div>
                    </div>
                </div>
                <div class="done">
                    <div class="box-done">
                        <div class="icon-done">
                            <div class="icon-img-done"></div>
                        </div>
                        <div class="value-done"><?php echo $done['COUNT(*)'] ?></div>
                        <div class="text-done">Naskah Done</div>
                    </div>
                </div>
                <div class="rejected">
                    <div class="box-rejected">
                        <div class="icon-rejected">
                            <div class="icon-img-rejected"></div>
                        </div>
                        <div class="value-rejected"><?php echo $rejected['COUNT(*)'] ?></div>
                        <div class="text-rejected">Naskah Rejected</div>
                    </div>
                </div>
                <div class="royalti">
                    <div class="box-royalti">
                        <div class="text-royalti">Royalti</div>
                    </div>
                </div>
                <div class="last-naskah">
                    <div class="box-last-naskah">
                        <div class="text-lastt">Tulisan Terakhir</div>
                        <div class="text-last-naskah">
                            <div class="judul-last">No</div>
                            <div class="judul-last">Judul Buku</div>
                            <div class="judul-last">Kategori</div>
                            <div class="judul-last">ISBN</div>
                            <div class="judul-last">E-ISBN</div>
                            <div class="judul-last">Status</div>
                            <?php if($jika['COUNT(*)'] > 1) { ?>
                            
                                <div class="item-last">1</div>
                                <div class="item-last"><?php echo $tabels['judul'] ?></div>
                                <div class="item-last"><?php echo $tabels['kategori'] ?></div>
                                <div class="item-last"><?php echo $tabels['isbn'] ?></div>
                                <div class="item-last"><?php echo $tabels['e_isbn'] ?></div>
                                <?php if($tabels['status'] == "Review") { ?>
                                    <div class="item-last">
                                        <div class="last-review"><p>Review</p></div>
                                    </div>
                                <?php } else if($tabels['status'] == "Done") { ?>
                                    <div class="item-last">
                                        <div class="last-done"><p>Done</p></div>
                                    </div>
                                <?php } else if($tabels['status'] == "Rejected") { ?>
                                    <div class="item-last">
                                        <div class="last-rejected"><p>Rejected</p></div>
                                    </div>
                                <?php } else { ?>
                                    <div class="item-last">
                                        <div class="last-proses"><p>Proses</p></div>
                                    </div>
                                <?php } ?>
                            <?php while($tabels = mysqli_fetch_array($tabel)) { ?>
                                <div class="item-last"><?php echo $no ?></div>
                                <div class="item-last"><?php echo $tabels['judul'] ?></div>
                                <div class="item-last"><?php echo $tabels['kategori'] ?></div>
                                <div class="item-last"><?php echo $tabels['isbn'] ?></div>
                                <div class="item-last"><?php echo $tabels['e_isbn'] ?></div>
                                <?php if($tabels['status'] == "Review") { ?>
                                    <div class="item-last">
                                        <div class="last-review"><p>Review</p></div>
                                    </div>
                                <?php } else if($tabels['status'] == "Done") { ?>
                                    <div class="item-last">
                                        <div class="last-done"><p>Done</p></div>
                                    </div>
                                <?php } else if($tabels['status'] == "Rejected") { ?>
                                    <div class="item-last">
                                        <div class="last-rejected"><p>Rejected</p></div>
                                    </div>
                                <?php } else { ?>
                                    <div class="item-last">
                                        <div class="last-proses"><p>Proses</p></div>
                                    </div>
                                <?php } ?>
                                <?php $no++ ?>
                            <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- right content -->
        <form action="control.php" method="post" class="rightcontent"> 
            <!-- upload -->
            <div class="upload">
                <button type="submit" name="submit"  class="box-upload">
                    <div class="icon-upload"></div>
                    <div class="text-upload">Upload Naskah</div>
                </button>
            </div>
            <!-- media -->
            <div class="media">
                <div class="box-media">
                    <div class="text-media">Media</div>
                    <a href="https://www.itbpress.id/" class="itbpress">
                        <div class="icon-itbpress"></div>
                        <div class="text-itbpress">ITB Press</div>
                    </a>
                    <a href="https://www.tokopedia.com/itbpress" class="tokopedia">
                        <div class="icon-tokopedia"></div>
                        <div class="text-tokopedia">Tokopedia</div>
                    </a>
                    <a href="#" class="moco">
                        <div class="icon-moco"></div>
                        <div class="text-moco">Moco</div>
                    </a>
                    <div class="blank-media"></div>
                </div>
            </div>
            <div class="blank-right-1"></div>
            <div class="blank-right-2"></div>
        </form>
    </div>
</body>
</html>