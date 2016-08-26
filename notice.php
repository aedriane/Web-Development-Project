<?php
	session_start();

	$page_title="Attention!";

	include("include/header.inc");
	include("include/nav.inc");
	include("include/rotate.inc");
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
</head>

	<body>
	<div id="page">
		<h2>Notice! You must <a href="login.php">Log In</a> to view any form of the catalogue! Please <a href="register.php">Register</a> if you do not have an account!</h2>
	</div>
	</body>

</html>

<?php
	include("include/noticefooter.inc");
?>