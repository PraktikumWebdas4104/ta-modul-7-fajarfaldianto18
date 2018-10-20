<form method="POST" enctype="multipart/form-data">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" length=35></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="number" name="nim" length=10></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="Laki-Laki">Laki-Laki &nbsp; <input type="radio" name="jenkel" value="Perempuan">Perempuan </td>
		</tr>
		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal" length=35></td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name ="prodi">
				<option >-</option>
				<option value="Manajemen Informatika">Manajemen Informatika</option>
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Sistem Multimedia">Sistem Multimedia</option>
				<option value="Perhotelan">Perhotelan</option>
				<option value="Manajemen Pemasaran">Manajemen Pemasaran</option>
				<option value="Komunikasi Akutansi">Komikasi Akutansi</option></select></td>

		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name ="fakultas">
				<option >-</option>
				<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
				<option value="Fakultas Industri Kreatif">Fakultas Industri Kreatif</option>
				<option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
				<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
				<option value="Fakultas Komunikasi Bisnis">Fakultas Komunikasi Bisnis</option>
				<option value="Fakultas Informatika">Fakultas Informatika</option></select></td>

		</tr>

		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><textarea name="Moto" cols ="25" row = "10"></textarea></td>
		</tr>


	</table>
	<input type="submit" name="submit" value="Daftar">
	
</form>

<?php
		if (isset($_POST['submit'])) {
			include'belajar.php';
			$nama= $_POST['nama'];
			$nim = $_POST['nim'];
			$jeniskelamin = $_POST['jeniskelamin'];
			$asal = $_POST['asal'];
			$prodi = $_POST['prodi'];
			$fakultas = $_POST['fakultas'];
			$Moto = $_POST['Moto'];
			$query="INSERT INTO d_mhs
			values('$nim','$nama', '$jeniskelamin', '$asal', '$prodi', '$fakultas', '$Moto')";
			$hasil=mysqli_query($koneksi,$query);
			echo "Data Masuk";
			
		}
?>