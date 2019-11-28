<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'koneksi.php';
if (isset($_POST["submit"])) {


	
	// cek data berhasil ditambahkan atau tidak
	if (tambah($_POST) > 0) {
		echo "
		<script>
			alert('data berhasil ditambahkan!');
			document.location.href = 'index.php';
		</script>
		";
	} else {
		echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'index.php';
		</script>
		";
	}
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
</head>
<body>
	<h1>Tambah Data Mahasiswa</h1>
	<br>
	<br>
	<form action="" method="post" enctype="multipart/form-data" >
		<ul>
			<li>
				<label for="nim">NIM :</label>
				<input type="text" name="nim" id="nim" required>
			</li>
			<br>
			<li>
				<label for="nama">Nama :</label>
				<input type="text" name="nama" id="nama" required>
				
			</li>
			<br>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" required>
			</li>
			<br>
			<li>
				<label for="jurusan">Jurusan :</label>
				<select name="jurusan" id="jurusan">
                <option value="Informatika">Informatika </option>
                <option value="Elektro">Elektro</option>
                <option value="Kimia">Kimia</option>
                <option value="Biologi">Biologi</option>
                <option value="Matematika">Matematika</option>
                <option value="Fisika">Fisika</option>
              </select>
			</li>
			<br>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Tambah</button>
			</li>
		</ul>
		
	</form>
</body>
</html>