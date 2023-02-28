<?php
session_start();
if( !isset($_SESSION["id_user"]) ) {
	header("Location: ../");
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

$cover = mysqli_query($conn, "SELECT * FROM pilihan WHERE kategori = 'cover'");
$isi = mysqli_query($conn, "SELECT * FROM pilihan WHERE kategori = 'isi'");
function pembulatan($uang){
    $ratusan = substr($uang, -3);
    if($ratusan<0)
    $akhir = $uang - $ratusan;
    else
    $akhir = $uang + (1000-$ratusan);
    echo number_format($akhir, 2, ',', '.');
}

if( !isset($_SESSION["id_user"]) ) {
    $riwayat = mysqli_query($conn, "SELECT * FROM riwayat_hpp WHERE id_user = 'anonim' ORDER BY id_riwayat DESC LIMIT 8");
} else {
    $riwayat = mysqli_query($conn, "SELECT * FROM riwayat_hpp WHERE id_user = '$id' ORDER BY id_riwayat DESC LIMIT 8");
}

if(isset($_GET['idr'])) {
    $idriwa = $_GET['idr'];
    $klikriwayat = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM riwayat_hpp WHERE id_riwayat = '$idriwa' "));
    if($klikriwayat['pajak'] == 0) {
        $paja = "Sebelum Pajak";
    } else {
        $paja = "Sesudah Pajak";
    }
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
                <div class="nametag">Cek Harga</div>
                <form action="control.php" method="post" class="harga">
                    <div class="box-harga">
                        <div class="cover">
                            <div></div>

                            <div class="cover-buku">
                                <img src="../filecover/noimage.jpg" alt="">
                            </div>
                            
                            <div class="total">
                                <p class="eks">Harga per eks</p>
                                <?php if(isset($_GET['eks'])) { ?>
                                    <div class="eks">: Rp <?php echo pembulatan($_GET['eks']) ?></div>
                                <?php } elseif(isset($_GET['idr'])) { ?>
                                    <div class="eks">: Rp <?php echo pembulatan($klikriwayat['eks']) ?></div>
                                <?php } else { ?>
                                    <div class="eks">: Rp 00.000</div>
                                <?php } ?>
                                <p>Harga total</p>
                                <?php if(isset($_GET['total'])) { ?>
                                    <div class="alleks">: Rp <?php echo pembulatan($_GET['total']) ?></div>
                                <?php } elseif(isset($_GET['idr'])) {?>
                                    <div class="alleks">: Rp <?php echo pembulatan($klikriwayat['total']) ?></div>
                                <?php } else { ?>
                                    <div class="alleks">: Rp 00.000</div>
                                <?php } ?>
                                <div class="pajak">Pajak</div>
                                <select name="pajak" id="pajak" onchange="this.form.submit()">
                                    <?php if(isset($_GET['pajak'])) { ?>
                                        <option value="<?php echo $_GET['pajak'] ?>"><?php echo $_GET['pajak'] ?></option>
                                    <?php } elseif (isset($_GET['idr'])) { ?>
                                        <option value="<?php echo $paja ?>"><?php echo $paja ?></option>
                                    <?php } ?>
                                    <option value="sebelum">Sebelum Pajak</option>
                                    <option value="sesudah">Sesudah Pajak</option>
                                </select>
                            </div>
                            
                            <div class="p">
                                <p>*sudah termasuk biaya publishing</p>
                                <p>*sudah termasuk biaya buku dummy + arsip perpustakaan</p>
                            </div>
                        </div>
                        
                        <div class="inputan">
                            <?php if(isset($_GET['error'])) { ?>
                                <div style="position: absolute" class="blann"><br><br> Silahkan lengkapi form</div>
                            <?php } ?>
                            <div class="blann"></div>
                            <div class="blann"></div>
                            <div class="blann"></div>
                            <div class="blann"></div>
                            <div class="blann"></div>
                            <div class="blann"></div>
                            <div class="blann"></div>
                            <div class="blann"></div>

                            <label for="judul">Judul Buku</label>
                            <div>:</div>
                            <?php if(isset($_GET['judul'])) { ?>
                                <input type="text" id="judul" name="judul" placeholder="contoh buku" value="<?php echo $_GET['judul'] ?>">
                            <?php } elseif (isset($_GET['idr'])) { ?>
                                <input type="text" id="judul" name="judul" placeholder="contoh buku"  value="<?php echo $klikriwayat['judul'] ?>">
                            <?php  } else { ?>
                                <input type="text" id="judul" name="judul" placeholder="contoh buku">
                            <?php }  ?>
                            <div></div>

                            <label for="qty">Quantity</label>
                            <div>:</div>
                            <?php if(isset($_GET['qty'])) { ?>
                                <input type="number" id="qty" name="qty" placeholder="150 eksemplar" value="<?php echo $_GET['qty'] ?>">
                            <?php } elseif  (isset($_GET['idr'])) { ?>
                                <input type="number" id="qty" name="qty" placeholder="150 eksemplar" value="<?php echo $klikriwayat['qty'] ?>">
                            <?php } else { ?>
                                <input type="number" id="qty" name="qty" placeholder="150 eksemplar">
                             <?php  } ?>
                             <div></div>

                            <label for="fc">Halaman FC</label>
                            <div>:</div>
                            <?php if(isset($_GET['fc'])) { ?>
                                <input type="number" id="fc" name="fc" placeholder="50 Lembar" value="<?php echo $_GET['fc'] ?>">
                            <?php } elseif (isset($_GET['idr'])) { ?>
                                <input type="number" id="fc" name="fc" placeholder="50 Lembar" value="<?php echo $klikriwayat['fc'] ?>">
                            <?php } else { ?>
                                <input type="number" id="fc" name="fc" placeholder="50 Lembar">
                            <?php  } ?>
                            <div></div>

                            <label for="bw">Halaman BW</label>
                            <div>:</div>
                            <?php if(isset($_GET['bw'])) { ?>
                                <input type="number" id="bw" name='bw' placeholder="100 Lembar" value="<?php echo $_GET['bw'] ?>">
                            <?php } elseif (isset($_GET['idr'])) { ?> 
                                <input type="number" id="bw" name='bw' placeholder="100 Lembar" value="<?php echo $klikriwayat['bw'] ?>">
                            <?php } else { ?>
                                <input type="number" id="bw" name='bw' placeholder="100 Lembar">
                            <?php  } ?>
                            <div></div>


                            <label for="ukuran">Ukuran</label>
                            <div>:</div>
                            <select name="ukuran" id="ukuran">
                                <?php if(isset($_GET['ukuran'])) { ?>
                                    <option value="<?php echo $_GET['ukuran'] ?>"><?php echo $_GET['ukuran'] ?></option>
                                <?php } elseif (isset($_GET['idr'])) { ?>
                                    <option value="<?php echo $klikriwayat['ukuran'] ?>"><?php echo $klikriwayat['ukuran'] ?></option>
                                <?php } ?>
                                <option value="A3">A3</option>
                                <option value="A4">A4</option>
                                <option value="A5">A5</option>
                                <option value="B5">B5</option>
                            </select>
                            <div></div>

                            <label for="isi">Bahan Isi</label>
                            <div>:</div>
                            <select name="isi" id="isi">
                                <?php if(isset($_GET['isi'])) { ?>
                                    <option value="<?php echo $_GET['isi'] ?>"><?php echo $_GET['isi'] ?></option>
                                <?php } elseif(isset($_GET['idr'])) { ?>
                                    <option value="<?php echo $klikriwayat['isi'] ?>"><?php echo $klikriwayat['isi'] ?></option>
                                <?php } ?>
                                <?php while ($isis = mysqli_fetch_array($isi)) { ?>
                                        <option value="<?php echo $isis['nama'] ?>"><?php echo $isis['nama'] ?></option>
                                <?php } ?>
                            </select>
                            <div></div>

                            <label for="cover">Bahan Cover</label>
                            <div>:</div>
                            <select name="cover" id="cover">
                                <?php if(isset($_GET['cover'])) { ?>
                                    <option value="<?php echo $_GET['cover'] ?>"><?php echo $_GET['cover'] ?></option>
                                <?php } elseif (isset($_GET['idr'])) { ?>
                                    <option value="<?php  echo $klikriwayat['cover'] ?>"><?php echo $klikriwayat['cover'] ?></option>
                                <?php } ?>
                                <?php while ($covers = mysqli_fetch_array($cover)) { ?>
                                    <option value="<?php echo $covers['nama'] ?>"><?php echo $covers['nama'] ?></option>
                                <?php } ?>
                            </select>
                            <div></div>

                            <label for="jenis-cover">Jenis Cover</label>
                            <div>:</div>
                            <select name="jenis-cover" id="jenis-cover">
                                <?php if(isset($_GET['jenis'])) { ?>
                                    <option value="<?php echo $_GET['jenis'] ?>"><?php echo $_GET['jenis'] ?></option>
                                <?php } elseif(isset($_GET['idr'])) { ?>
                                    <option value="<?php echo $klikriwayat['jenis'] ?>"><?php echo $klikriwayat['jenis'] ?></option>
                                <?php } ?>
                                <option value="Softcover">Softcover</option>
                                <option value="Hardcover">Hardcover</option>
                            </select>
                            <div></div>

                            <label for="laminasi">Laminasi</label>
                            <div>:</div>
                            <select name="laminasi" id="laminasi">
                                <?php if(isset($_GET['laminasi'])) { ?>
                                    <option value="<?php echo $_GET['laminasi'] ?>"><?php echo $_GET['laminasi'] ?></option>
                                <?php } elseif(isset($_GET['idr'])) { ?>
                                    <option value="<?php echo $klikriwayat['laminasi'] ?>"><?php echo $klikriwayat['laminasi'] ?></option>
                                <?php } ?>
                                <option value="Glosi">Glosi</option>
                                <option value="Doff">Doff</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                            <div></div>

                            <label for="finishing">Finishing</label>
                            <div>:</div>
                            <select name="finishing" id="finishing">
                                <?php if(isset($_GET['finishing'])) { ?>
                                    <option value="<?php echo $_GET['finishing'] ?>"><?php echo $_GET['finishing'] ?></option>
                                <?php } elseif(isset($_GET['idr'])) { ?>
                                    <option value="<?php echo $klikriwayat['finishing']  ?>"><?php echo $klikriwayat['finishing'] ?></option>
                                <?php } ?>
                                <option value="finishing1">Binding</option>
                                <option value="finishing2">Binding Jahit</option>
                                <option value="finishing3">Binding Jahit Hardcover</option>
                                <option value="finishing4">Booklet</option>
                            </select>
                            <div></div>

                            <label for="uv">Spot UV</label>
                            <div>:</div>
                            <select name="uv" id="uv">
                                <?php if(isset($_GET['uv'])) { ?>
                                    <option value="<?php echo $_GET['uv'] ?>"><?php echo $_GET['uv'] ?></option>
                                <?php } elseif (isset($_GET['idr'])) { ?>
                                    <option value="<?php echo $klikriwayat['uv'] ?>"><?php echo $klikriwayat['uv'] ?></option>
                                <?php } ?>
                                <option value="Tidak">Tidak</option>
                                <option value="Ya">YA</option>
                            </select>
                            <div></div>

                            <div></div>
                            <div></div>
                            <button type="submit" name="hitung">Hitung</button>

                            <!-- publishing -->
                            <label style="display: none;" for="editing">Editing</label>
                            <select style="display: none;" name="editing" id="editing">
                                <option value="basic">Basic</option>
                                <option value="advance">Advance</option>
                                <option value="tidak">Tidak</option>
                            </select>

                            <label style="display: none;" for="layouting">Layouting</label>
                            <select style="display: none;" name="layouting" id="layouting">
                                <option value="basic">Basic</option>
                                <option value="advance">Advance</option>
                                <option value="tidak">Tidak</option>
                            </select>

                            <label style="display: none;" for="pubcover">Cover</label>
                            <select style="display: none;" name="pubcover" id="pubcover">
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>

                            <label style="display: none;" for="pennaskah">Penanganan Naskah</label>
                            <select style="display: none;" name="pennaskah" id="pennaskah">
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>

                            <labe style="display: none;" for="setting">Setting</label>
                            <select style="display: none;" name="setting" id="setting">
                                <option value="ya">Ya</option>
                                <option value="tidak">Tidak</option>
                            </select>

                            <div></div>
                            <div></div>
                        </div>
                        
                        <div class="riwayat">
                            <div class="rrr">Riwayat Penghitungan</div>
                            <?php while($riwayats = mysqli_fetch_array($riwayat )) { ?>
                                <a href=" index.php?idr=<?php echo $riwayats['id_riwayat'] ?>">
                                    <div class="xbulat"></div>
                                    <div class="xjudul" ><?php echo $riwayats['judul'] ?></div>
                                    <?php if($riwayats['pajak'] == 0) { $pajaks = "Sebelum Pajak"; ?>
                                        <li class="xpajak"><?php echo $pajaks ?></li>
                                    <?php } else { $pajaks = "Sesudah Pajak"; ?>
                                        <li class="ypajak"><?php echo $pajaks ?></li>
                                    <?php } ?>
                                    <div class="xharga">Rp <?php echo pembulatan($riwayats['eks']) ?></div>
                                </a>
                            <?php } ?>
                            <div></div>
                        </div>
                    </div>
                </form>
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