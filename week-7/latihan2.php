<?php  
	
	function hitung($nama, $color="purple") {
		if(strlen($nama) > 20 ) {
			$harga = strlen($nama) * 700;
		} else if(strlen($nama) > 10) {
			$harga = strlen($nama) * 500;
		} else if(strlen($nama) > 0) {
			$harga = strlen($nama) * 300;
		}
		echo "<font color='".$color."'> Nama : $nama dengan harga bet sebesar $harga</font><br>" ;
	}

	hitung("Dewi Rahayu")
?>