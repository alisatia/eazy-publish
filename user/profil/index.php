<?php
session_start();
if( !isset($_SESSION["id_user"]) ) {
	header("Location: ../../");
	exit;
}
?>
<?php
require '../../conn.php';
$id = $_SESSION['id_user'];
$result = mysqli_query($conn, "SELECT * FROM user WHERE id_user= '$id'");
$user = mysqli_fetch_array($result);
$email = $user['email'];
$penulis = mysqli_query($conn, "SELECT * FROM penulis WHERE email= '$email'");
$data = mysqli_fetch_array($penulis);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Profil</title>
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
            <a class="profil" href="../../user/profil/">
                <div class="blank-box-profil-1"></div>
                <div class="blank-box-profil-2"></div>
                <div class="box-profil">
                    <div class="username"><?php echo $user['username'] ?></div>
                    <div class="avatar">
                        <img src="../../gambar/<?php echo $data['file_foto']?>" alt="">
                    </div>
                </div>
            </a>
        </div>
        
        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidedas">
                <div class="blank-1"></div>
                <div class="blank-3"></div>
                <a href="../../user/dasboard/" class="dasboard">
                    <div class="box-dasboard"></div>
                    <div class="dasb">Dasboard</div>
                </a>
                <a href="../../status/" class="status">
                    <div class="box-status"></div>
                    <div class="stat">Status</div>
                </a>
                <a href="../../naskah/" class="naskah">
                    <div class="box-naskah"></div>
                    <div class="nask">Naskah</div>
                </a>
                <a href="../../cekharga/" class="cek-harga">
                    <div class="box-cek-harga"></div>
                    <div class="harg">Cek Harga</div>
                </a>
                <a href="../../guidelines/" class="guidelines">
                    <div class="box-guidelines"></div>
                    <div class="guid">Guidelines</div>
                </a>
                <div class="logout">
                    <a href="../../login/logout.php"class="box-logout"></a>
                    <div class="logg">Logout</div>
                </div>
            </div>
            <div class="blank-2">
                <a href="../../login/logout.php"class="box-logout"></a>
            </a>
            </div>
        </div>
 
        <!-- content -->
        <div class="content">
            <div class="blank-content-1"></div>
            <div class="blank-content-2"></div>
            <div class="box-content">
                <div class="blank-box-content"></div>
                <div class="nametag">Profil User</div>
                <div class="content-profil">
                    <div class="box-isi">
                        <div class="gambar">
                            <form action="control.php" method="post" enctype="multipart/form-data" class="isi-gambar">
                                <img src="../../gambar/<?php echo $data['file_foto']?>" alt="penulis">
                                <label for="imgfile" id="label-img" name="file">
                                    <img src="../../assets/img.png" alt="upload">
                                </label>
                                <input type="file" id="imgfile" name="file" onchange="this.form.submit()">
                                <?php if(isset($_GET['error'])) { ?>
                                    <p class="texx"><?php echo $_GET['error'] ?></p>
                                <?php } ?>
                            </form>
                            <form action="control.php" method="post" class="isi-biografi">
                                <h3>Biografi</h3>
                                <textarea id="textareas" name="biografi-penulis" placeholder="Biografi Penulis" onchange="this.form.submit()" ><?php echo $data['biografi'] ?></textarea>
                            </form>
                        </div>
                        <form  action="control.php" method="post" class="biodata">
                            <input class="nama-penulis" type="text" name="nama-penulis" onchange="this.form.submit()" placeholder="Nama Penulis" value="<?php echo $data['nama'] ?>">
                            <h4 class="input-h4">Informasi Kontak</h4>
                            <div class="info-kontak">
                                <label for="phone-penulis">Phone</label>
                                <div class=":">:</div>
                                <input type="number"name="phone-penulis" onchange="this.form.submit()" placeholder="Nomor Telpon" value="<?php echo $data['phone'] ?>">
                                
                                <label for="kontak-penulis">Kontak Lain</label>
                                <div class=":">:</div>
                                <input type="number"name="kontak-penulis" onchange="this.form.submit()" placeholder="Kontak Lain Penulis" value="<?php echo $data['kontak_lain'] ?>">
                                    
                                <label for="jabatan-penulis">Jabatan</label>
                                <div class=":">:</div>
                                <input type="text"name="jabatan-penulis" onchange="this.form.submit()" placeholder="Jabatan Penulis" value="<?php echo $data['jabatan'] ?>">
                                
                                <label for="instansi-penulis">Instansi</label>
                                <div class=":">:</div>
                                <input type="text"name="instansi-penulis" onchange="this.form.submit()" placeholder="Instansi Penulis" value="<?php echo $data['instansi'] ?>">
                            </div>
                            <h4 class="input-h4">Informasi Penulis</h4>
                            <div id="img-kirim" onclick="imgKirim()" class="img-kirim"></div>
                            <div class="info-penulis">
                                <div id="jss"></div>
                                <label for="info-ktp">No KTP</label>
                                <div class=":">:</div>
                                <input class="input--" type="text" name="info-ktp" placeholder="No KTP">
                                <label for="info-rekening">No Rekening</label>
                                <div class=":">:</div>
                                <input class="input--" type="text" name="info-rekening" placeholder="No Rekening">
                                <label for="upload-ktp">Upload KTP</label>
                                <div class=":">:</div>
                                <input class="input-" type="file" name="upload-ktp">
                                <label for="upload-npwp">Upload NPWP</label>
                                <div class=":">:</div>
                                <input class="input-" type="file" name="upload-npwp">
                            </div>
                            <button type="submit" name="kirim" class="kirim-email">Kirim</button>
                            <p>*Informasi penulis dikirim ke email dan tidak ditampilkan di website</p>
                        </form>
                        <div class="naskah-jadi"></div>
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

    <script src="script.js"></script>
</body>
</html>