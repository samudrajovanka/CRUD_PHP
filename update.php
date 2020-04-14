<!DOCTYPE html>
<head>
	<title>Ubah Data</title>
</head>
<body>
	<h3>Ubah Data</h3>

	<?php 
		include "connection.php";

		// mengambil data dari name ubah_nim
		$nim = $_GET["ubah_nim"];

		// query mengambil data berdasarkan kondisi
		$sql = "SELECT * FROM data_mahasiswa WHERE nim='$nim'";
		$query = mysqli_query($koneksi, $sql);

		// mengecek ada/tida sebuah data
		if(mysqli_num_rows($query) > 0) {
			$data = mysqli_fetch_array($query);
		} else {
			die("data tidak ditemukan");
		}
	?>

	<form action="proses_update.php" method="POST">
		<input type="hidden" name="nim" value="<?php echo $data["nim"]; ?>">

		<table>
			<tr>
				<td><label for="nama">Nama</label></td>
				<td>:</td>
				<td><input type="text" id="nama" name="nama" value="<?php echo $data["nama"]; ?>"></td>
			</tr>

			<tr>
				<td><label for="jurusan">Jurusan</label></td>
				<td>:</td>
				<td><input type="text" id="jurusan" name="jurusan" value="<?php echo $data["jurusan"]; ?>"></td>
			</tr>

			<tr>
				<td><label for="fakultas">Fakultas</label></td>
				<td>:</td>
				<td><input type="text" id="fakultas" name="fakultas" value="<?php echo $data["fakultas"]; ?>"></td>
			</tr>

			<tr>
				<td><button type="submit" name="ubah">Ubah</button></td>
			</tr>
		</table>
	</form>
</body>
</html>