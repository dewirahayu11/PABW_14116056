<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MYSQL</title>
</head>
<body>
<h1>Demo Koneksi Database MYSQL</h1>
<?php 
$conn = mysqli_connect("localhost", "root", "", "prak8");
if ($conn) {
	echo "OK";
} else {
	echo "Server not Connected";
}
?>
</body>
</html>