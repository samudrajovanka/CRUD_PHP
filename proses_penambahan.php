<?php
	include "connection.php";

	echo $_FILES['gambar'];
	if(isset($_POST['simpan'])) {
		// ambil data dari form create.php
		$nim_mhs = $_POST["nim"];
		$nama_mhs = $_POST["nama"];
		$jurusan_mhs = $_POST["jurusan"];
		$fakultas_mhs = $_POST["fakultas"];
		$gambar_mhs = $_FILES["gambar"]["name"];
		$gambar_tmp = $_FILES["gambar"]["tmp_name"];

		if($gambar_mhs != "") {
			$fotobaru = date('dmYHis').$gambar_mhs;
			$path = "image/".$fotobaru;
			move_uploaded_file($gambar_tmp, $path);
		} else {
			$fotobaru = null;
		}

		// query untuk menyimpan data
		$sql = "INSERT INTO data_mahasiswa (nim, nama, jurusan, fakultas, gambar) VALUES ('$nim_mhs', '$nama_mhs', '$jurusan_mhs', '$fakultas_mhs', '$fotobaru')";
		$query = mysqli_query($koneksi, $sql);

		if($query) {
			echo "Data berhasil disimpan";
		} else {
			echo "Data tidak berhasil disimpan";
			echo "<br>Error : ".$sql.mysqli_error($koneksi);
		}
	} else {
		echo "Tidak ada akses";
	}
?>

<br>
<a href="index.php">Home</a>
