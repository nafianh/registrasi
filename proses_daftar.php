<?php 
	include 'koneksi.php';

				$uname			 		= $_POST['1'];
				$passw 					= $_POST['2'];
				$privilage 				= $_POST['3'];
				$nama					= $_POST['4'];
				$jk 					= $_POST['5'];
				$mail					= $_POST['6'];
				$umur					= $_POST['7'];
				$alamat					= $_POST['8'];
				$regional				= $_POST['9'];

	$quer=mysql_query("INSERT INTO dtbs VALUES('', '$uname', '$passw', '$privilage', '$nama', '$jk', '$mail', '$umur', '$alamat', '$regional')");

	if ($quer) {
		header('location:login.php');
	}

?>