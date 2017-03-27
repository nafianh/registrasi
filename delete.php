<?php
require 'koneksi.php';
if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$query = mysql_query("DELETE FROM dtbs WHERE id ='$id'");
		if($query){
				echo "<script>
		alert('Data Sudah Berhasil diHapus');
		window.location.assign('read.php');
		</script>";
				
		}else{
			echo "<script>
		alert('Anda Gagal Menghapus Data');
		window.location.assign('read.php');
		</script>";
				echo "Gagal";
				header('location: ./read.php');
		}
}
?>

