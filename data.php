<?php
	$server ="localhost";
	$username ="root";
	$password="";
	$db ="datamhs";
	$koneksi =mysqli_connect($server, $username, $password, $db);
		if($koneksi){
			echo "koneksi sukses";
		}
		else{
			echo "Koneksi gagal";
		}
 ?>