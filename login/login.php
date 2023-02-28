<?php 
session_start(); 
include "../conn.php";

if (isset($_POST['user']) && isset($_POST['pass'])) {

    //validasi data
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

    //variabel data
	$email = validate($_POST['user']);
	$pass = validate($_POST['pass']);

    //jika form kosong
	if (empty($email OR $pass)) {
		header("Location: sign.php?errorsignin=silakan isi email dan password");
	    exit();
	}else if(empty($email)){
        header("Location: sign.php?errorsignin=silahkan isi email");
	    exit();
	}else if(empty($pass)){
        header("Location: sign.php?errorsignin=silahkan isi password&signinemail=$email");
	    exit();
	}else{
        
         //
		$sql = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
            	$_SESSION['id_user'] = $row['id_user'];
            	header("Location: ../user/dasboard/");
		        exit();
            }else{
				header("Location: sign.php?errorsignin=email atau password tidak sesuai&signinemail=$email");
		        exit();
			}
		}else{
			header("Location: sign.php?errorsignin=email atau password tidak sesuai&signinemail=$email");
	        exit();
		}
	}
	
}else{
	header("Location: sign.php");
	exit();
}