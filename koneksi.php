<?php 
	include 'data.php';
	$query = "SELECT id_barang, nama_barang, harga, stok from barang";
	mysqli_query($koneksi)
	$hasil = mysqli_query($koneksi, $sql);
	echo "<a href='tambahbrg.php> Tambah Barang</a><br><br>";
	echo "<table border=1>
				<tr style='background' : grey;'>
				<tr>
					<th>ID Barang</th>
					<th>Nama Barang</th>
					<th>Harga</th>
					<th>Stok</th>
					<th>Aksi</th>
				</tr>";
				while ($hs1=$hasil -> fetch_assoc()) {
					# code...
					echo "<tr>
								<td>".$hs1['id_barang']."<td>;
								<td>".$hs1['nama_barang']."<td>;
								<td>".$hs1['harga']."<td>;
								<td>".$hs1['jumlah']."<td>
								<td><a href = ""<td>
						 </tr>
				</table";
				}
 ?>