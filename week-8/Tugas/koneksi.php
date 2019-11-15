<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","itera");



function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}


function tambah ($data) {
	global $conn;
	// ambil data dair tiap elemen
	$nim		= htmlspecialchars($data['nim']); 
	$nama		= htmlspecialchars($data['nama']); 
	$email 		= htmlspecialchars($data['email']); 
	$jurusan	= htmlspecialchars($data['jurusan']); 

	//upload gambar 
	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	// query insert data
	$query = "INSERT INTO Mahasiswa
				VALUES 
				('','$nim','$nama','$email','$jurusan','$gambar')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload () {
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang di upload
	if ( $error == 4 ) {
		echo "<script>
		alert('pilih gambar terlebih dahulu');
		</script>";
	return false;
	}

	// cek apakah yang diuload adalah gambar
	$ekstensiGambarValid = ['jpg','jpeg','png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
		alert('Yang anda upload Bukan Gambar');
		</script>";
	return false;
	}

	// cek jika gambar terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "<script>
			alert('Ukuran gambar terlalu besar');
		</script>";
	return false;
	}

	// lolos pengecekan, gambar siap upload
	// generate nama gambar baru 
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/'. $namaFileBaru);
	return $namaFileBaru;
}

function hapus ($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($conn);
}
	
	
function cari($keyword) {
	$query = "SELECT * FROM mahasiswa 
			WHERE
			nama LIKE '%$keyword%' OR 
			nim LIKE '%$keyword%' OR
			email LIKE '%$keyword%' OR
			jurusan LIKE '%$keyword%'
			";
			return query($query);
}


?>