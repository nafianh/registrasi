<?php session_start();
include "koneksi.php";
$username=$_POST['uname'];
$password=$_POST['passw'];
$query=mysql_query("SELECT * from dtbs where uname='$username' and passw ='$password'");
if($query){
$_SESSION['useruname']=$uname;
$result=mysql_fetch_array($query);
if($result['privilage']==1){
	
	header("location:userhome.php");
}
else if($result['privilage']==0){
	header("location:adminhome.php");
}

}else{
 ?>Anda gagal login. silahkan <a href="login.php">Login kembali</a><?php
 echo mysql_error();
}

?>