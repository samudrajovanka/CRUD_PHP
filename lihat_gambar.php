<!DOCTYPE html>
<head>
	<title>Lihat Foto</title>
</head>
<body>
	<h3>Lihat Gambar</h3>

	<?php 
		include "connection.php";

		// mengambil data dari name ubah_nim
		$nim = $_GET["gambar_nim"];

		// query mengambil data berdasarkan kondisi
		$sql = "SELECT * FROM data_mahasiswa WHERE nim='$nim'";
		$query = mysqli_query($koneksi, $sql);

		// mengecek ada/tida sebuah data
		if(mysqli_num_rows($query) > 0) {
			$data = mysqli_fetch_array($query);
		} else {
			die("data tidak ditemukan");
		}

		if($data['gambar'] != null) {
			echo '<img src="image/'.$data['gambar'].'">';
		} else {
			echo "Tidak ada gambar";
		}
	?>	

	<br>
	<a href="read.php">Kembali</a>

</body>
</html>
