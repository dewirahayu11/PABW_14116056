<h1>Menampilkan bilangan prima dari 1-37</h1>
<?php for ($i=1; $i<=37; $i++) { 
	$a = 0;
	for ($j=1;$j<=$i;$j++){
			if ($i % $j == 0) {
				$a++;
			}
		}
		if ($a==2) {
			echo $i.'<br>';
		}
}
?>