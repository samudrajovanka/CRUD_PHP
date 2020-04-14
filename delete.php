<?php
	include "connection.php";

	if(isset($_GET["hapus_nim"])) {
		$nim_mhs = $_GET["hapus_nim"];

		$sql = "DELETE FROM data_mahasiswa WHERE nim='$nim_mhs'";
		$query = mysqli_query($koneksi, $sql);

		if($query) {
			echo "Data berhasil dihapus";
		} else {
			echo "Data gagal dihapus";
		}
	} else {
		echo "Tidak ada akses";
	}
?>

<br>
<a href="index.php">Home</a>