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
$buku = mysqli_query($conn, "SELECT  * FROM buku WHERE  id_penulis='$idpenulis'");
$bukuku = mysqli_fetch_array($buku);
$countbuku = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) FROM buku WHERE id_penulis = '$idpenulis'"));
$jmllist = $countbuku['COUNT(*)'];

if(isset($_GET['id'])) {
    $idbuku = $_GET['id'];
    $listbuku = mysqli_query($conn, "SELECT  * FROM buku WHERE  id_buku='$idbuku'");
    $books = mysqli_fetch_array($listbuku);
    $bookstatus = $books['status'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Status</title>
</head>
<body> 
    <div class="container">
    <div id="produksiB" class="produksi">
        <div class="produksi_cogs">
            <div class='COGfirst'>
                <div class='firstPart'></div>
                <div class='firstPart'></div>
                <div class='firstPart'></div>
                <div class='firstHole'></div>
            </div>
            <div class='COGsecond'>
                <div class='secondPart'></div>
                <div class='secondPart'></div>
                <div class='secondPart'></div>
                <div class='secondHole'></div>
            </div>
            <div class='COGthird'>
                <div class='thirdPart'></div>
                <div class='thirdPart'></div>
                <div class='thirdPart'></div>
                <div class='thirdHole'></div>
            </div>
        </div>
    </div>
    <div id="mouA">
        <div>S</div>
        <div>S</div>
        <div>E</div>
        <div>R</div>
        <div>P</div>
        <div class=""></div>
        <div>B</div>
        <div>T</div>
        <div>I</div>
    </div>
    <div id="mouB" class="lds-ellipsis">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <p>Silahkan upload MoU anda</p>
    </div>
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
                <div class="nametag">Status Naskah</div>
                <div class="content-status">
                    <div class="status-box">
                        <div class="tracking">
                            <div class="userA">Upload</div>
                            <div class="user-blank"></div>
                            <div id="done" class="userB">Done</div>
                        
                            <div id="b1" class="c1"></div>
                            <div id="k1" class="k2"></div>
                            <div id="b2" class="c3"></div>
                            <div id="k2" class="k4"></div>
                            <div id="b3" class="c5"></div>
                            <div id="k3" class="k6"></div>
                            <div id="b4" class="c7"></div>
                            <div id="k4" class="k8"></div>
                            <div id="b5" class="c9"></div>
                            <div id="k5" class="k10"></div>
                            <div id="b6" class="c11"></div>
                            <div id="k6" class="k12"></div>
                            <div id="b7" class="c13"></div>
                            <div id="k7" class="k14"></div>
                            <div id="b8" class="c15"></div>
                            <div id="k8" class="k16"></div>
                            <div id="b9" class="c17"></div>
                            
                            <div class="blank-admin1"></div>
                            <div id="s1" class="admin-admin1">Review</div>
                            <div class="blank-admin2"></div>
                            <div id="s2" class="admin-admin2">Meet</div>
                            <div class="blank-admin3"></div>
                            <div id="s3" class="admin-admin3">MoU</div>
                            <div class="blank-admin4"></div>
                            <div id="s4" class="admin-admin4">Editing & Layouting</div>
                            <div class="blank-admin5"></div>
                            <div id="s5" class="admin-admin5">Pendaftaran ISBN</div>
                            <div class="blank-admin6"></div>
                            <div id="s6" class="admin-admin6">Produksi</div>
                            <div class="blank-admin7"></div>
                            <div id="s7" class="admin-admin7">Publish</div>
                            <div class="blank-admin8"></div>

                        </div>
                        <div class="status-track">
                            <div id="bookyT" class="blank-status-track"></div>

                            <!-- content -->
                            <div class="info-status">
                                <!-- list buku -->
                                <?php if(!isset($_GET['id'])) { ?>
                                    <div id="list-buku" class="list-buku-status">

                                        <?php if($jmllist != 0) { ?>
                                            <form action="control.php" method="post">
                                                <div class="aaa">
                                                    <button  type="submit" name="listbuku" class="buku-buku">
                                                        <input type="hidden" name="id-buku" value="<?php echo $bukuku['id_buku'] ?>">
                                                        <div class="buku-judul">
                                                            <p><?php echo $bukuku['judul'] ?></p>
                                                        </div>
                                                        <div class="buku-penulis"><?php echo $bukuku['penulis'] ?></div>
                                                        <div class="buku-status"><?php echo $bukuku['status'] ?></div>
                                                    </button>
                                                </div>
                                            </form>
                                            
                                            <?php while($bukuku = mysqli_fetch_array($buku)) { ?>
                                                <form action="control.php" method="post">
                                                    <div class="aaa">
                                                        <button type="submit" name="listbuku" class="buku-buku">
                                                            <input type="hidden" name="id-buku" value="<?php echo $bukuku['id_buku'] ?>">
                                                            <div class="buku-judul">
                                                                <p><?php echo $bukuku['judul'] ?></p>
                                                            </div>
                                                            <div class="buku-penulis"><?php echo $bukuku['penulis'] ?></div>
                                                            <div class="buku-status"><?php echo $bukuku['status'] ?></div>
                                                        </button>
                                                    </div>
                                                </form>
                                            <?php } ?>
                                        <?php } ?>

                                    </div>
                                <?php } ?>
                                <!-- publish -->
                                <div id="publish-doneA" class="blank-publish"></div>
                                <div id="publish-doneB" class="pesawat"></div>
                                <div id="publish-doneC" class="informasi">
                                    <p>Naskah sudah kami publish</p>
                                </div>
                                <!-- produksi -->
                                <div id="produksiA" class="blank-produksi"></div>
                                <div id="produksiB-" class="blank-produksi"></div>
                                <div id="produksiC" class="informasi">
                                    <p>Naskah anda sedang kami produksi</p>
                                </div>
                                <!-- pendaftaran isbn -->
                                <div id="isbnA" class="blank-isbn"></div>
                                <div id="isbnB" class="dots-bars-6"></div>
                                <div id="isbnC" class="informasi">
                                    <p>ISBN dan E-ISBN anda sedang di daftarkan</p>
                                    <p>Tunggu informasi selanjutnya!</p>
                                </div>
                                <!-- editing and layouting -->
                                <div id="layoutingA" class="blank-informasi"></div>
                                <div id="layoutingB" class="layouting">
                                    <div class="wave"></div>
                                    <div class="wave"></div>
                                    <div class="wave"></div>
                                    <div class="wave"></div>
                                    <div class="wave"></div>
                                    <div class="wave"></div>
                                    <div class="wave"></div>
                                    <div class="wave"></div>
                                    <div class="wave"></div>
                                    <div class="wave"></div>
                                </div>
                                <div id="layoutingC" class="informasi">
                                    <p>Tim editing dan layouting kami sedang mengerjakan naskah anda!</p>
                                    <p>Ditinggu ya! perkiraan selesai 5 hari lagi</p>
                                </div>
                                <!-- mou -->
                                <div id="mouA-" class="blank-mou">
                                </div>
                                <div id="mouB-" class="blank-mou"></div>
                                <div id="mouC" class="isi-mou">
                                    <form action="postmou.php" method="post" class="mou-upload" enctype="multipart/form-data">
                                        <label for="input-mou-upload" class="drop-container">
                                            <span id="" class="drop-title">Drop files here</span>
                                            or
                                            <input type="file" id="input-mou-upload">
                                            <input type="hidden" name="id-book" value="<?php echo $_GET['id'] ?>">
                                        </label>
                                        <button class="send" type="submit" name="send">Send</button>                                             
                                    </form>
                                </div>
                                <!-- meeting -->
                                <div id="meetingA" class="judul1">Meeting, MoU dan Pembayaran</div>
                                <div id="meetingB" class="judul2">
                                    <div class="judul2-">Jadwal Meeting</div>
                                    <div class="judul2--">Anda mendapatkan jadwal meeting pada :</div>
                                    <div class="jadwal">
                                        <div class="">Tanggal</div>
                                        <div class="">:</div>
                                        <div class="">Senin, 12 Februari 2023</div>
                                        <div class="">Jam</div>
                                        <div class="">:</div>
                                        <div class="">10:00 WIB</div>
                                        <div class="">Link Zoom</div>
                                        <div class="">:</div>
                                        <div class="">lkjfldksjafdsafadsaasdfdas</div>
                                    </div>
                                </div>
                                <div id="meetingC" class="judul3">
                                    <div class="judul3-">Kontrak Kerja Sama / MoU</div>
                                    <div class="judul3--">Untuk mendownload kontrak kerja sama silahkan klik <a href="download.php?file=mou.pdf">disini. </a>MoU ini ditandatangi oleh salah satu perwakilan dari penulis. MoU ditandatangani menggunakan materai Rp. 10,000, kemudian di scan dan di upload pada tombol di bawah ini.</div>
                                </div>
                                <!-- review -->
                                <div id="reviewA" class="blank-informasi"></div>
                                <div id="reviewB" class="book">
                                    <div class="book__pg-shadow"></div>
                                    <div class="book__pg"></div>
                                    <div class="book__pg book__pg--2"></div>
                                    <div class="book__pg book__pg--3"></div>
                                    <div class="book__pg book__pg--4"></div>
                                    <div class="book__pg book__pg--5"></div>
                                </div>
                                <div id="reviewC" class="informasi">
                                    <p>Naskah Kamu Sedang di Review, Tunggu ya!</p>
                                    <p>Perkiraan Selesai 1 hari dari sekarang!</p>
                                </div>

                            </div>

                            <div id="bookyS" class="booky-status"></div>
                        </div>
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
    
    <?php if(isset($_GET['id'])) { ?>
        <script>
                var done = document.getElementById("done");

                var s1 = document.getElementById("s1");
                var s2 = document.getElementById("s2");
                var s3 = document.getElementById("s3");
                var s4 = document.getElementById("s4");
                var s5 = document.getElementById("s5");
                var s6 = document.getElementById("s6");
                var s7 = document.getElementById("s7");

                var b1 = document.getElementById("b1");
                var b2 = document.getElementById("b2");
                var b3 = document.getElementById("b3");
                var b4 = document.getElementById("b4");
                var b5 = document.getElementById("b5");
                var b6 = document.getElementById("b6");
                var b7 = document.getElementById("b7");
                var b8 = document.getElementById("b8");
                var b9 = document.getElementById("b9");

                var k1 = document.getElementById("k1");
                var k2 = document.getElementById("k2");
                var k3 = document.getElementById("k3");
                var k4 = document.getElementById("k4");
                var k5 = document.getElementById("k5");
                var k6 = document.getElementById("k6");
                var k7 = document.getElementById("k7");
                var k8 = document.getElementById("k8");

                var stta = document.getElementById("reviewA");
                var sttb = document.getElementById("reviewB");
                var sttc = document.getElementById("reviewC");

                var meea = document.getElementById("meetingA");
                var meeb = document.getElementById("meetingB");
                var meec = document.getElementById("meetingC");

                var moua = document.getElementById("mouA");
                var mouaA = document.getElementById("mouA-");
                var moub = document.getElementById("mouB");
                var moubB = document.getElementById("mouB-");
                var mouc = document.getElementById("mouC");

                var edia = document.getElementById("layoutingA");
                var edib = document.getElementById("layoutingB");
                var edic = document.getElementById("layoutingC");

                var isba = document.getElementById("isbnA");
                var isbb = document.getElementById("isbnB");
                var isbc = document.getElementById("isbnC");

                var proa = document.getElementById("produksiA");
                var prob = document.getElementById("produksiB");
                var probB = document.getElementById("produksiB-");
                var proc = document.getElementById("produksiC");
                
                var puba = document.getElementById("publish-doneA");
                var pubb = document.getElementById("publish-doneB");
                var pubc = document.getElementById("publish-doneC");

        </script>
        <?php if($bookstatus == "Review") { ?>
            <script>
                stta.style.display = "block";
                sttb.style.display = "block";
                sttc.style.display = "block";

                b3.style.display = "none";
                b4.style.display = "none";
                b5.style.display = "none";
                b6.style.display = "none";
                b7.style.display = "none";
                b8.style.display = "none";
                b9.style.display = "none";

                k3.style.display = "none";
                k4.style.display = "none";
                k5.style.display = "none";
                k6.style.display = "none";
                k7.style.display = "none";
                k8.style.display = "none";

                s2.style.color = "#b7b8ba";
                s3.style.display = "none";
                s4.style.display = "none";
                s5.style.display = "none";
                s6.style.display = "none";
                s7.style.display = "none";

                done.style.display ="none";
            </script>
        <?php }  ?>
        <?php if($bookstatus == "Meet") { ?>
            <script>
                meea.style.display = "block";
                meeb.style.display = "grid";
                meec.style.display = "grid";

                b4.style.display = "none";
                b5.style.display = "none";
                b6.style.display = "none";
                b7.style.display = "none";
                b8.style.display = "none";
                b9.style.display = "none";

                k4.style.display = "none";
                k5.style.display = "none";
                k6.style.display = "none";
                k7.style.display = "none";
                k8.style.display = "none";

                s3.style.color = "#b7b8ba";
                s4.style.display = "none";
                s5.style.display = "none";
                s6.style.display = "none";
                s7.style.display = "none";

                done.style.display ="none";
            </script>
        <?php }  ?>
        <?php if($bookstatus == "MoU") { ?>
            <script>
                moua.style.display = "block";
                mouaA.style.display = "block";
                moub.style.display = "grid";
                moubB.style.display = "block";
                mouc.style.display = "grid";

                b5.style.display = "none";
                b6.style.display = "none";
                b7.style.display = "none";
                b8.style.display = "none";
                b9.style.display = "none";

                k5.style.display = "none";
                k6.style.display = "none";
                k7.style.display = "none";
                k8.style.display = "none";

                s4.style.color = "#b7b8ba";
                s5.style.display = "none";
                s6.style.display = "none";
                s7.style.display = "none";

                done.style.display ="none";
            </script>
        <?php }  ?>
        <?php if($bookstatus == "Editing & Layouting") { ?>
            <script>
                edia.style.display = "block";
                edib.style.display = "flex";
                edic.style.display = "block";

                b6.style.display = "none";
                b7.style.display = "none";
                b8.style.display = "none";
                b9.style.display = "none";

                k6.style.display = "none";
                k7.style.display = "none";
                k8.style.display = "none";

                s5.style.color = "#b7b8ba";
                s6.style.display = "none";
                s7.style.display = "none";

                done.style.display ="none";
            </script>
        <?php }  ?>
        <?php if($bookstatus == "Pendaftaran ISBN") { ?>
            <script>
                moua.style.display = "block";
                isba.style.display = "block";
                isbb.style.display = "block";
                isbc.style.display = "block";

                b7.style.display = "none";
                b8.style.display = "none";
                b9.style.display = "none";

                k7.style.display = "none";
                k8.style.display = "none";

                s6.style.color = "#b7b8ba";
                s7.style.display = "none";

                done.style.display ="none";
            </script>
        <?php }  ?>
        <?php if($bookstatus == "Produksi") { ?>
            <script>
                proa.style.display = "block";
                prob.style.display = "flex";
                probB.style.display = "grid";
                proc.style.display = "grid";

                b8.style.display = "none";
                b9.style.display = "none";

                k8.style.display = "none";

                s7.style.color = "#b7b8ba";

                done.style.display ="none";
            </script>
        <?php }  ?>
        <?php if($bookstatus == "Publish") { ?>
            <script>
                puba.style.display = "block";
                pubb.style.display = "block";
                pubc.style.display = "block";
            </script>
        <?php }  ?>
    <?php } ?>
    <script src="script.js"></script>
</body>
</html>