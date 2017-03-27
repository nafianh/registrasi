<!DOCTYPE html>
<html>
<head>
		<title>UPDATE ACCOUNT</title>
		<link rel="stylesheet" href="assets/css/main.css" />

		<?php
		require 'koneksi.php';


		if (isset($_POST['submit'])) {
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
				mysql_query("INSERT INTO  dtbs VALUES ('', '$uname', '$passw', '$privilage', '$nama', '$jk', '$mail', '$umur', '$alamat', '$regional')");
			if($quer){
					header('location: ./read.php');
			} else{
				echo "UPDATE dtbs SET
						uname='$uname',
						passw='$passw',
						privilagee='privilage',
						nama='$nama',
						jk='$jk',
						email='$email',
						umur='$umur',
						alamat='$alamat'
						regional='regional'
						WHERE
						no='$no'" ;
			}
			}
			
		if (isset($_GET['id'])) {
				$id = $_GET['id'];
		$query = mysql_query("SELECT * FROM dtbs WHERE id ='$id'");
			$hasil = mysql_fetch_array($query);
			?>
		</head>
		<body>
		<u>Edit Data Berita</u>
		<form method="POST" action="aksiupdate.php">
				<input type="hidden" name="0" value="<?php echo $hasil[0] ?>">
<table>
		<table>
		<tr>
				<td>Username*</td>
				<td><input type="text" name="1"></td>
		</tr>
		<tr>
				<td>Password*</td>
				<td><input type="password" maxlength="10" name="2"></td>
		</tr>
		<tr>
				<td>Previlage</td>
				<td>
					<select name="3">
						<option value="0">User</option>
						<option value="1">Admin</option>
					</select>
				</td>
		</tr>
		<tr>
				<td>Nama</td>
				<td><input type="text" name="4"></td>
		</tr>
		<tr>
				<td>Jenis Kelamin*</td>
				<td>
					<input type="radio" name="5" value="Male">Male
					<input type="radio" name="5" value="Female">Female
				</td>
		</tr>

		<tr>
				<td>Email*</td>
				<td><input type="text" name="6"></td>
		</tr>

		<tr>
				<td>Umur*</td>
				<td><input type="text" name="7"></td>
		</tr>

		<tr>
				<td>Alamat*</td>
				<td><input type="text" name="8"></td>
		</tr>

		<tr>
				<td>Regional</td>
				<td>
					<select name="9">
						<option value="Jawa Tengah">Jawa Tengah</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Barat">Jawa Barat</option>
						<option value="Yogyakarta">Yogyakarta</option>
						<option value="Jakarta">Jakarta</option>
						<option value="Jawa Tengah">Bali</option>
						<option value="Jawa Timur">Sumatra</option>
						<option value="Jawa Barat">Kalimantan</option>
						<option value="Yogyakarta">Sulawesi</option>
						<option value="Jakarta">Maluku</option>
						<option value="Jakarta">Papua</option>
					</select>
				</td>
		</tr>
	<td>
			Tanda(*) harus di isi
			</td>
		</tr>

<tr>
		<td><input type="submit" name="submit" value="UPDATE"></td>
</tr>
							</table>
							<?php }?>
		</form>
		</body>
		</html>