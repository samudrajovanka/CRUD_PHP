<?php 
	include "connection.php";

	if(isset($_POST["ubah"])) {
		$nim_mhs = $_POST["nim"];
		$nama_mhs = $_POST["nama"];
		$jurusan_mhs = $_POST["jurusan"];
		$fakultas_mhs = $_POST["fakultas"];

		$sql = "UPDATE data_mahasiswa SET nama='$nama_mhs', jurusan='$jurusan_mhs', fakultas='$fakultas_mhs' WHERE nim='$nim_mhs'";
		$query = mysqli_query($koneksi, $sql);

		if($query) {
			echo "Data berhasil dirubah";
		} else {
			echo "Data tidak berhasil dirubah";
			echo "<br>Error : ".$sql.mysqli_error($koneksi);
		}
	} else {
		echo "Tidak ada akses";
	}
?>

<br>
<a href="index.php">Home</a>