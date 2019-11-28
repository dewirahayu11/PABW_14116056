<?php
session_start();

if (!isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'koneksi.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
		button {
			font-style: sans-serif;
		}
		table {
			border-color: purple;
		}
	</style>
</head>
<body>

	<h1>Daftar Mahasiswa</h1>

	<button type="submit" style="background-color: lightgreen; color: black;"><a href="tambah.php">Tambah Data Mahasiswa</a></button>
	<br>
	<br>

	<form action="" method="post">

	<input type="text" name="keyword" size="30" autofocus placeholder="Cari" autocomplete="off"	>
	<button type="submit" name="cari">Cari</button>
	</form>
	<br>

	<table border="2" cellpadding="10" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Gambar</th>
			<th>Nim</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Jurusan</th>
		</tr>

<?php $i=1; ?>
<?php foreach ( $mahasiswa as $row ) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td>
				<button type="submit" style="background-color: pink; color:black;"><a href="hapus.php?id=<?php echo $row['id']; ?>" onclick = "return confirm('Yakin Ingin Menghapus Data Mahasiswa?');">Hapus</a></button>
			</td>
			<td>
				<img src="img/<?php echo $row['gambar']; ?>" width="80">
			</td>
			<td><?php echo $row['nim']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['jurusan']; ?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
		
	</table>
	<br>
	
</body>
</html>