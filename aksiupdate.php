<?php
session_start();
require 'koneksi.php';
$id						= $_POST['0'];
				$uname			 		= $_POST['1'];
				$passw 					= $_POST['2'];
				$privilage 				= $_POST['3'];
				$nama					= $_POST['4'];
				$jk 					= $_POST['5'];
				$mail					= $_POST['6'];
				$umur					= $_POST['7'];
				$alamat					= $_POST['8'];
				$regional				= $_POST['9'];
				$query=mysql_query("UPDATE dtbs SET 
					uname='$uname',
					passw='$passw',
					privilage='$privilage',
					nama='$nama',
					jk='jk',
					mail='$mail',
					umur='$umur',
					alamat='$alamat',
					regional='$regional'
					WHERE id='$id'");
				if ($query) {
					header("location:read.php");
				}

?>