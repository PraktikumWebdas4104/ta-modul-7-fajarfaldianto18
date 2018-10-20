<center><h2>Cari Mahasiswa</h2></center><br><br>
<form>
	<table align="center" method=POST>
		<tr>
			<td>Nim</td>
			<td>:</td>
			<td><input type="text" name="nim" maxlength="10"></td>
		</tr>

		<tr>
			<td><input type="submit" name="cari" value="Cari"></td>
		</tr>
	</table>
</form>

<?php
	
	if (isset($_POST['cari'])) {
		include 'koneksi.php';
		$cari=$_POST['nim'];
		$query=mysqli_query($conn,"SELECT * FROM datamhs WHERE nim='".$cari."'");
		$result=mysqli_fetch_array($query);
		echo "<table border=1 align=center>
			<tr style='background:grey;'>
			<tr>
				<th>Nim</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Program Studi</th>
				<th>Fakultas</th>
				<th>Asal</th>
				<th>Motto Hidup</th>
				<th>Aksi</th>
			<tr>";
		foreach($query as $hsl) {
			
			echo "<tr>
				<td>".$hsl["nim"]."</td>
				<td>".$hsl["nama"]."</td>
				<td>".$hsl["jenis_kelamin"]."</td>
				<td>".$hsl["prodi"]."</td>
				<td>".$hsl["fakultas"]."</td>
				<td>".$hsl["asal"]."</td>
				<td>".$hsl["motto"]."</td>
				<td><button><a href='hapus.php'>Hapus</a></button></td>";
		echo "</table><br><br>";
		}
	}
?>