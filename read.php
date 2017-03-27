
<!DOCTYPE html>
<html>

<head>
		<title>Read</title>
</head>
<body>


<center><h2>Data Account</h2></center>

<center>
<table border="1">
<tr>
		<th>No</th>
		<th>Username</th>
		<th>Password</th>
		<th>Previlage</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Email</th>
		<th>Umur</th>
		<th>Alamat</th>
		<th>Regional</th>
		<th>Aksi</th>

</tr>
		<?php
				require 'koneksi.php';
				$no = 1;
				$query = mysql_query("SELECT * FROM dtbs");
				while ($hasil = mysql_fetch_array($query)) {
					?>
				<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $hasil[1]?></td>
				<td><?php echo $hasil[2]?></td>
				<td><?php echo $hasil[3]?></td>
				<?php 
				if($hasil[3]==1)
				?>
				<td><?php echo $hasil[4]?></td>
				<td><?php echo $hasil[5]?></td>
				<td><?php echo $hasil[6]?></td>
				<td><?php echo $hasil[7]?></td>
				<td><?php echo $hasil[8]?></td>
				<td><?php echo $hasil[9]?></td>
				
				<td> 
				<a href="update.php?id=<?php echo $hasil[0]?>"><input type= "submit" name="submit" value ="Update"></a>
				<a href="delete.php?id=<?php echo $hasil[0]?>"><input type= "submit" name="submit" value ="Delete"></a>
				</td>
				</tr>
				
<?php }?>
		</table> <br>
		</center>

		<center>

		<td><a href="create.php"><input type= "submit" name="submit" value ="Create new account"></td> <br>
		<td><a href="login.php"><input type= "submit" name="submit" value ="Keluar"></td>

		</center>
</body>
</html>
