<!DOCTYPE html>
<html>
<head>
		<title>Read User</title>
</head>
<body>
 <center>
<h2>Data Pengunjung</h2>
<table border="1">
<tr>

		<th>No</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Email</th>
		<th>Umur</th>
		<th>Alamat</th>
		<th>Regional</th>
		
		
</tr>
		<?php
		session_start();
				require 'koneksi.php';
				$no = 1;
				$query = mysql_query("SELECT * FROM dtbs");
				while ($hasil = mysql_fetch_array($query)) { ?>
				<tr>
				<td><?php echo $no++; ?></td>
				<?php 
				if($hasil[3]==1)
				?>
				<td><?php echo $hasil[4]?></td>
				<td><?php echo $hasil[5]?></td>
				<td><?php echo $hasil[6]?></td>
				<td><?php echo $hasil[7]?></td>
				<td><?php echo $hasil[8]?></td>
				<td><?php echo $hasil[9]?></td>
				</td>
				</tr>
<?php }?>
		</table>
		<td><a href="login.php"><input type= "submit" name="submit" value ="Keluar"></td>
		
</body>
</html>