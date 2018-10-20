<?php 
	include "koneksi.php";
	$nim = $_GET['nim'];
	$query = "SELECT * FROM mhs WHERE nim = $nim";
	$hasil = mysqli_query($koneksi, $query);
	$row = mysqli_fetch_array($hasil);
 ?>
<form action="" method="POST">
	<table>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" value="<?php echo($row[0]); ?>"></td>
		</tr>

		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" value="<?php echo($nim); ?>"></td>
		</tr>

		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jns_k" value="Laki-Laki">Laki Laki
				<input type="radio" name="jns_k" value="Perempuan">Perempuan</td>
		</tr>

		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prog_stud">
				<option value="0">Program Studi</option>
				<option value="Sisfo" <?php if($row[3]=='Sisfo'){echo 'Selected';}?> >Sistem Informasi</option>
				<option value="DKV" <?php if($row[3]=='DKV'){echo 'Selected';}?> >Desain Komunikasi Visual</option>
				<option value="MBTI" <?php if($row[3]=='MBTI'){echo 'Selected';}?> >Manajemen Bisnis Telekomunikasi Informatika</option>
				<option value="IKOM" <?php if($row[3]=='IKOM'){echo 'Selected';}?> >Ilmu Komunikasi</option>
				<option value="TI" <?php if($row[3]=='TI'){echo 'Selected';}?> >Teknik Indrustri</option>
				<option value="TIF" <?php if($row[3]=='TIF'){echo 'Selected';}?> >Teknik Informatika</option>
			</select></td>
		</tr>

		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="1">Fakultas</option>
				<option value="FIT" <?php if($row[4]=='FIT'){echo 'Selected';}?> >Fakultas Ilmu Terapan</option>
				<option value="FIK" <?php if($row[4]=='FIK'){echo 'Selected';}?> >Fakultas Indrustri Kreatif</option>
				<option value="FEB" <?php if($row[4]=='FEB'){echo 'Selected';}?> >Fakultas Ekonomi Bisnis</option>
				<option value="FKB" <?php if($row[4]=='FKB'){echo 'Selected';}?> >Fakultas Komunikasi Bisnis</option>
				<option value="FRI" <?php if($row[4]=='FRI'){echo 'Selected';}?> >Fakultas Rekayasa Industri</option>
				<option value="FTI" <?php if($row[4]=='FTI'){echo 'Selected';}?> >Fakultas Teknik Informatika</option>
			</select></td>
		</tr>

		<tr>
			<td>Asal</td>
			<td>:</td>
			<td><input type="text" name="asal" value="<?php echo($row[5]); ?>"></td>
		</tr>

		<tr>
			<td>Moto Hidup</td>
			<td>:</td>
			<td><textarea name="moto"> <?php echo($row[6]); ?> </textarea></td>
		</tr>

		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" name="submit" value="Input">
				<a href="index.php"></td>
		</tr>
	</table>
</form>

<?php 
	if (isset($_POST['submit'])) {
		include "koneksi.php";
		$nama = $_POST['nama'];
		$nim1 = $_POST['nim'];
		$jns_k = $_POST['jns_k'];
		$prog_stud = $_POST['prog_stud'];
		$fakultas = $_POST['fakultas'];
		$asal = $_POST['asal'];
		$moto = $_POST['moto'];
			$query = "UPDATE mhs 
					  SET nama = '$nama', nim = '$nim1', jns_k = '$jns_k', prog_stud = '$prog_stud', fakultas = '$fakultas', asal = '$asal', moto = '$moto'
					  WHERE nim = $nim";
					  
			$hasil = mysqli_query($koneksi, $query);
			header("location: index.php");
			echo "Data Masuk";
	}
 ?>