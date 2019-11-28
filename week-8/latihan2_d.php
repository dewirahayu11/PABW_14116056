<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MYSQL</title>
</head>
<body>
<h1>Koneksi Databse dengan mysqli_fetch_assoc</h1>
<?php 
$conn = mysqli_connect("localhost","root","") or die ("koeneksi gagal");
mysqli_select_db($conn,"prak8");
$hasil = mysqli_query($conn, "SELECT * FROM liga");
while ($row=mysqli_fetch_row($hasil)) {
	echo "Liga" .$row[1];
	echo "mempunyai" .$row[2];
	echo "wakil di liga champion <br>";
}
?>
</body>
</html>