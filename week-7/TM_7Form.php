<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
</head>
<body>
<form action="TM_7hasil.php" method="POST">
	<label for="name">Nama :</label>
	<input type="text" name="nm" id="nama" required="" placeholder="Nama Lengkap" > 
	<br>
	<br>
	<label for="alamat">Alamat :</label>
	<input type="text" name="alamat" id="alamat" placeholder="Alamat">
	<br>
	<br>
	<label>Jenis kelamin :</label>
	<br>
	<input type="radio" name="jk" id="lk" value="laki-laki" checked="">
	<label for="lk">laki-laki &nbsp</label> 
	<br>
	<input type="radio" name="jk" id="pr" value="perempuan">
	<label for="pr">Perempuan &nbsp</label> <br><br>
	<label>Golongan darah : </label>
	<select name="golongan">
		<option value="A">A</option>
		<option value="B">B</option>
		<option value="AB">AB</option>
		<option value="O">O</option>
	</select> <br><br>
	<label>Hoby : </label>
	<br>
	<input type="checkbox" name="hobi[]" id="baca" value="baca"><label for="baca">Membaca</label>
	<br>
	<input type="checkbox" name="hobi[]" id="jalan" value="jalan"><label for="bad">Jalan-jalan</label>
	<br>
	<input type="checkbox" name="hobi[]" id="makan" value="makan"><label for="fut">Makan</label>
	<br>
	<input type="checkbox" name="hobi[]" id="nyanyi" value="nyanyi"><label for="tak">Menyanyi</label> 
	<br>
	<br>
	<label>Keterangan</label>
	<br>
	<textarea name="keterangan"></textarea>
	<br>
	<input type="submit" name="submit" value="Simpan">
</form>
</body>
</html>