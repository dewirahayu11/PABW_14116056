<!DOCTYPE html>
<html>
<head>
	<title>Buku Tamu</title>
</head>
<body>
	<h1>Buku Tamu untuk Database</h1>
	<form action="prosestambah.php" method="post">
		<label>Nama :</label>
		<input type="text" name="nama" size="35" maxlength="50"> <br>
		<label>Email :</label>
		<input type="text" name="email" size="35" maxlength="50"><br>
		<label>Komentar :</label>
		<textarea name="komentar" rows="5" cols="30"></textarea> <br>
		<input type="submit" value="Simpan">
		<input type="reset" value="Reset">
	</form>

</body>
</html>