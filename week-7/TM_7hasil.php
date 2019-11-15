<!DOCTYPE html>
<html>
<head>
	<title>Hasil Cetak Data</title>
</head>
<body>
<h1>Hasil Pencetakan Data</h1>
<?php  
	$data = [
				"nama"=>$_POST["nm"],
				"alamat"=>$_POST["alamat"],
				"jenis"=>$_POST["jk"],
				"golongan"=>$_POST["golongan"],
				"hobi"=>$_POST["hobi"],
				"ket"=>$_POST["keterangan"]
			];

		echo "Nama : "; 
		echo $data['nama'];	
		echo "<br>";
		echo "Alamat : "; 
		echo $data['alamat'];	
		echo "<br>";
		echo "Jenis kelamin : "; 
		echo $data['jenis'];
		echo "<br>";
		echo "Golongan darah : "; 
		echo $data['golongan'];
		echo "<br>";
		echo "Hobi : "; 
		foreach ($data['hobi'] as $value) {
			echo "$value, ";
		}
		echo "<br>";
		echo "Keterangan : "; 
		echo $data['ket'];

		// echo "alamat : $value['alamat']";	
		// echo "Jenis kelamin : $value['jenis']";	
		// echo "golongan darah : $value['golongan']";	
		// echo "Hobi : $value['hobi']";	
		// echo "keterangan : $value['ket']";	
 
?>
</body>
</html>