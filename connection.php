<?php
	$server = "localhost";
	$user = "root";
	$pass = "";
	$dbase = "db_mahasiswa";

	// membuat koneksi
	$koneksi = mysqli_connect($server, $user, $pass, $dbase);

	// mengecek koneksi
	if($koneksi) {
		// echo "Koneksi berhasil";
	} else {
		die("Koneksi gagal : " .mysql_connect_error());
	}
?>