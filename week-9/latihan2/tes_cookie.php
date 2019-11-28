<?php setcookie("test_cookie","prak9", time()+36000, '/'); ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php if(count($_COOKIE) > 0) {
		echo "Cookies Enabled";
		// kalau enabled menyimpan chace (cookies) diddlm browser shg mengaksenya lebih cepat
	} else {
		echo "Cookies disbled";
		//  kalau disabled tidak menyimpan chace (cookies) diddlm browser shg mengaksenya lebih lambat
	}

	?>

</body>
</html>