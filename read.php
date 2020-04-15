<!DOCTYPE html>
<head>
	<title>Lihat Data</title>
</head>
<body>
	<h3>Lihat Data</h3>

	<a href="index.php">Home</a>

	<table border="1">
		<thead>
			<th>No</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jurusan</th>
			<th>Fakultas</th>
			<th>Tindakan</th>
		</thead>

		<tbody>
			<?php 
				include "connection.php";

				// query sql
				$sql = "SELECT * FROM data_mahasiswa";
				$query = mysqli_query($koneksi, $sql);

				$no = 1;

				// mengambil per data
				while($data = mysqli_fetch_array($query)) {
					echo "<tr>";

					echo "<td>".$no."</td>";
					echo "<td>".$data["nim"]."</td>";
					echo "<td>".$data["nama"]."</td>";
					echo "<td>".$data["jurusan"]."</td>";
					echo "<td>".$data["fakultas"]."</td>";

					echo "<td>";
		            echo "<a href='update.php?ubah_nim=".$data['nim']."'>Edit</a> | ";
		            echo "<a href='delete.php?hapus_nim=".$data['nim']."'>Hapus</a> | ";
		            echo "<a href='lihat_gambar.php?gambar_nim=".$data['nim']."'>Gambar</a>";
		            echo "</td>";

					echo "</tr>";

					$no++;
				}
			?>
		</tbody>
	</table>
</body>
</html>

						