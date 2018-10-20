<?php
	include 'koneksi.php';
	$nim = $_GET['nim'];
	$query = "DELETE FROM mhs WHERE nim = $nim";
	$hasil = mysqli_query($koneksi, $query);
		
		if ($hasil) {
		 	echo "Data Berhasil Dihapus";
		 	header("location: index.php");
		 }
		 else{
		 	echo "Gagal Menghapus Data";
		 } 
 ?>