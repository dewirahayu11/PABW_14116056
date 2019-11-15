<!DOCTYPE html>
<html>
<head>
	<title>Cari Database</title>
</head>
<body>
<h1>Searching Buku Tamu untuk Databse MYSQL</h1>
<form action="hasilsearch.php" method="post">
	<select name="kolom">
		<option value="nama">Nama</option>
		<option value="email">Email</option>		
	</select>
	Masukkan kata yang anda cari 
	<input type="text" name="cari">
	<input type="submit" v
	alue="cari">
</form>
</body>
</html>