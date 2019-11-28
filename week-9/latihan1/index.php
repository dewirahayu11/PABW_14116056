<?php 
session_start();
// redirect jika mempunyai session

if(isset($_SESSION['user'])) {
	header('location:home.php');
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Login Authentication OOP PABW</title>
</head>
<body>
	<h1>PHP Login Authentication OOP PABW</h1>
	<h3><span></span>Login</h3>
	<form action="login.php" method="POST">
		<div>
			<input type="text" name="username" placeholder="Username" autofocus required>
		</div>
		<div>
			<input type="password" name="password" placeholder="Password" autofocus required>
		</div>
		<button type="submit" name="login"><span></span>Login</button>
	</form>
	<?php 
if (isset($_SESSION['message'])) {
	?>
	<div>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php 
	unset($_SESSION['message']);
}
	 ?>

</body>
</html>