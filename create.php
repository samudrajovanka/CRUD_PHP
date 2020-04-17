<!DOCTYPE html>
<head>
	<title>Tambah Data</title>
</head>
<body>
	<h3>Tambah Data</h3>

	<form action="proses_penambahan.php" method="POST">
		<table>
			<tr>
				<td><label for="nim">NIM</label></td>
				<td>:</td>
				<td><input type="text" id="nim" name="nim" required=""></td>
			</tr>

			<tr>
				<td><label for="nama">Nama</label></td>
				<td>:</td>
				<td><input type="text" id="nama" name="nama" required=""></td>
			</tr>

			<tr>
				<td><label for="jurusan">Jurusan</label></td>
				<td>:</td>
				<td><input type="text" id="jurusan" name="jurusan" required=""></td>
			</tr>

			<tr>
				<td><label for="fakultas">Fakultas</label></td>
				<td>:</td>
				<td><input type="text" id="fakultas" name="fakultas" required=""></td>
			</tr>

			<tr>
				<td><button type="submit" name="simpan">Simpan</button></td>
			</tr>
		</table>
	</form>
</body>
</html>