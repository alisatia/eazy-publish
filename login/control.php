<?php 
session_start(); 
include "../conn.php";

if (isset($_POST['user']) && isset($_POST['password'])
    && isset($_POST['email']) && isset($_POST['re_password'])) {

    //masukan data
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    //variabel
	$uname = validate($_POST['user']);
	$pass = validate($_POST['password']);
	$re_pass = validate($_POST['re_password']);
	$email = validate($_POST['email']);
	$user_data = 'user='. $uname. '&email='. $email;
	
    //jika password kosong
	if (empty($uname && $email && $pass)) {
		header("Location: sign.php?errorsignup=Silahkan Lengkapi Form&$user_data ");
	    exit();
	}else if($pass !== $re_pass){
        header("Location: sign.php?errorsignup=password tidak sama&$user_data");
	    exit();
	}else {
        
        //ambil data dari database
	    $sql = "SELECT * FROM user WHERE email='$email' ";
		$result = mysqli_query($conn, $sql);

        //jika password ada yang sama
		if (mysqli_num_rows($result) > 0) {
			header("Location: sign.php?errorsignup=email $email  sudah digunakan&$user_data");
	        exit();
		}else {

            //input ke database
            $sql2 = "INSERT INTO user ( username, email, password, user) VALUES('$uname', '$email', '$pass', 'user')";
            $result2 = mysqli_query($conn, $sql2);
			$sql3 = "INSERT INTO penulis (email, nama, phone, instansi, jabatan, no_ktp, file_ktp, file_npwp, rekening, kontak_lain, biografi, file_foto) VALUES ('$email', '', '', '', '', '', '', '', '', '', '', '')";
			$result3 = mysqli_query($conn, $sql3);
            if ($result2) {
                header("Location: sign.php?errorsignin=Silahkan masukan password&signinemail=$email");
	            exit();
            }else {
	           	header("Location: sign.php?errorsignup=errorsignup&$user_data");
		        exit();
            }
		}
	}
	
}else{
	header("Location: sign.php");
	exit();
}