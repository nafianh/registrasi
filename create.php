<!DOCTYPE html>
<html>
<head>
		<title>CREATE NEW ACCOUNT</title>
		<?php
		require 'koneksi.php';
		
				?>
</head>
<body>
<center><h2>CREAT ACCOUNT</h2><br><br>
<form method="POST" action="tambahdata.php" >
<table>
		<tr>
				<td>Username *</td>
				<td><input type="text" name="1"></td>
		</tr>
		<tr>
				<td>Password *</td>
				<td><input type="password" maxlength="10" name="2"></td>
		</tr>
		<tr>
				<td>Previlage *</td>
				<td>
					<select name="3">
						<option value="User">User</option>
						<option value="Admin">Admin</option>
				
					</select>
				</td>
		</tr>
		<tr>
				<td>Nama</td>
				<td><input type="text" name="4"></td>
		</tr>
		<tr>
				<td>Jenis Kelamin *</td>
				<td>
					<input type="radio" name="5" value="Laki-Laki">Laki-Laki
					<input type="radio" name="5" value="Perempuan">Perempuan
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
				<td>Alamat</td>
				<td><input type="text" name="8"></td>
		</tr>

		<tr>
				<td>Regional *</td>
				<td>
					<select name="9">
						<option value="Jawa Tengah">Jawa Tengah</option>
						<option value="Jawa Timur">Jawa Timur</option>
						<option value="Jawa Barat">Jawa Barat</option>
						<option value="Yogyakarta">Yogyakarta</option>
						<option value="Jakarta">Jakarta</option>
						<option value="Bali">Bali</option>
						<option value="Sumatra">Sumatra</option>
						<option value="Kalimantan">Kalimantan</option>
						<option value="Sulawesi">Sulawesi</option>
						<option value="Maluku">Maluku</option>
						<option value="Pupua">Paupua</option>
					</select>
				</td>
		</tr> 

		<td><br>
			* Wajib Diisi
			</td>
</table><br>

		</tr>
		<tr>
				<td><input type="submit" name="submit" value="SUBMIT"></td>
		</tr>

		</center>
		

</form>
</body>
</html>