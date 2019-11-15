<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MYSQL</title>
</head>
<body>
<h1>Koneksi Databse dengan mysqli_fetch_array</h1>
<?php 
$conn = mysqli_connect("localhost","root","") or die ("koeneksi gagal");
mysqli_select_db($conn,"prak8");
$hasil = mysqli_query($conn, "SELECT * FROM liga");
while ($row=mysqli_fetch_array($hasil)) {
	echo "Liga" .$row["negara"];
	echo "mempunyai" .$row[2];
	echo "wakil di lga champion <br>";
}
?>
</body>
</html>