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
if(!isset($_GET['sip'])) {
    header("Location: ../guidelines/?yes");
    exit;
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
    <title>Upload</title>
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
                <div class="nametag">Upload Naskah</div>
                <div class="upload-naskah">
                    <div class="upload-blank-1"></div>
                    <div class="upload-blank-2"></div>
                    <form action="control.php" method="post" enctype="multipart/form-data" class="box-upload">
                        
                        <!-- side kiri -->
                        <div class="upload-name">
                            <div class="box-name">
                                
                                <div class="upload-judul">
                                    <div class="label-judul"></div>
                                        <?php if(isset($_GET['jdl'])) { ?>
                                            <input class="input-judul" type="text" name="judul-buku" placeholder="Judul Buku" value="<?php echo $_GET['jdl'] ?>">
                                        <?php } else { ?>
                                            <input class="input-judul" type="text" name="judul-buku" placeholder="Judul Buku">
                                        <?php } ?>
                                </div>
                                
                                <div class="upload-kategori">
                                    <div class="label-kategori"></div>
                                        <?php if(isset($_GET['ktg'])) { ?>
                                            <input class="kategori-buku" type="text" name="kategori-buku" placeholder="Kategori Buku" value="<?php echo $_GET['ktg'] ?>">
                                        <?php } else { ?>
                                            <input class="kategori-buku" type="text" name="kategori-buku" placeholder="Kategori Buku">
                                        <?php } ?>
                                </div>
                               
                                <div class="cek-jenis">
                                    <?php if(isset($_GET['isbn']) && $_GET['isbn'] == 'yes') { ?>
                                        <input type="checkbox" id="check-isbn" name="isbn" value="yes" checked>
                                        <label for="check-isbn">ISBN</label>
                                    <?php } else { ?>
                                        <input type="checkbox" id="check-isbn" name="isbn" value="yes">
                                        <label for="check-isbn">ISBN</label>
                                    <?php } ?>
                                    
                                    <?php if(isset($_GET['eisbn']) && $_GET['eisbn'] == 'yes') { ?>
                                        <input type="checkbox" id="check-eisbn" name="eisbn" value="yes" checked>
                                        <label for="check-eisbn">E-ISBN</label>
                                    <?php } else { ?>
                                        <input type="checkbox" id="check-eisbn" name="eisbn" value="yes">
                                        <label for="check-eisbn">E-ISBN</label>
                                    <?php } ?>

                                    <?php if(isset($_GET['royalti']) && $_GET['royalti'] == 'yes') { ?>
                                        <input type="checkbox" id="check-royalti" name="royalti" value="yes" checked>
                                        <label for="check-royalti">Royalti</label>
                                    <?php } else { ?>
                                        <input type="checkbox" id="check-royalti" name="royalti" value="yes">
                                        <label for="check-royalti">Royalti</label>
                                    <?php } ?>

                                </div>
                                
                                <div class="upload-penulis"> 
                                    <div class="label-penulis"></div>
                                    <?php if(isset($_GET['jml'])) { ?>
                                        <input class="number-penulis" type="number" placeholder="<?php echo $_GET['jml']?>" name="penulis" onchange="this.form.submit()">
                                        <span class="span-penulis">Penulis</span>
                                    <?php } else  if  (isset($_GET['error'])) { ?>
                                        <input class="number-penulis" type="number" placeholder="jumlah" name="penulis" onchange="this.form.submit()" style="color: red; font-weight: bold">
                                        <span class="span-penulis" style="color: red">Penulis</span>
                                    <?php } else { ?>
                                        <input class="number-penulis" type="number" placeholder="jumlah" name="penulis" onchange="this.form.submit()">
                                        <span class="span-penulis">Penulis</span>
                                    <?php } ?>
                                </div>
                               
                                <?php if(isset($_GET['jml'])) {?>                                        
                                    <input type="hidden" name="jmlpenulis" value="<?php echo $_GET['jml']?>">
                                <?php } ?>
                                    
                                    <?php if(isset($_GET['jml'])) {?>
                                        <?php $pilih = $_GET['jml']; ?>
                                        <?php if($pilih>0) { ?>
                                            <div class="list-penulis">
                                                <span class="span-loop">Penulis </span>
                                                <input class="penulis-loop" type="text" placeholder="nama penulis" name="penuliske1" value="<?php echo $data['nama']?>">
                                                <span class="span-loop">No Telpon </span>
                                                <input id="nomorpenulis" class="penulis-loop" type="text" placeholder="nomor penulis" name="nomor1" value="<?php echo $data['phone']?>">
                                                <?php
                                                $no = 2;
                                                while($pilih >= 2) { ?>
                                                    <span class="span-loop">Penulis <?php echo $no ?></span>
                                                    <input class="penulis-loop" type="text" placeholder="nama penulis  <?php echo $no ?>" name="penuliske<?php echo $no ?>">
                                                    <?php
                                                    $no++;
                                                    $pilih--;
                                                } ?>
                                            </div>
                                        <?php } ?>
                                    <?php } ?>

                            </div>
                        </div>
                        
                        <!-- side kanan -->
                        <div class="upload-file">
                            <div class="blank-blank"></div>
                            <label for="file" class="gabung-upload">
                                <div class="icon-file"></div>
                                <div id="file-name" class="drag-file">Drag and Drop file or</div>
                            </label>
                            <label class="label-file" for="file">
                                <p class="label-browser">Browser</p>
                            </label>
                            <input type="file" id="file" name="file" class="upload-files" onchange="uploadFile(this)">
                            <?php if(isset($_GET['file']) && $_GET['file'] != "") { ?>
                                <div class="uplaod-format" style="color:red;">Silahkan</div>
                                <div class="upload-size" style="color:red;"><?php echo $_GET['file'] ?></div>
                            <?php } else { ?>
                                <div class="uplaod-format">Upload your file in .docx format</div>
                                <div class="upload-size">and maximum size 100mb</div>
                            <?php } ?>

                            <button type="submit" name="upload-naskah" class="upload-button">Kirim</button>
                        </div>
                    </form>
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
    <script>
        function uploadFile(target) {
            document.getElementById("file-name").innerHTML = target.files[0].name;
        }
    </script>
</body>
</html>