<?php
	if(isset($_POST['username']))
        $username = $_POST['username'];
	if(isset($_POST['password']))
        $password = $_POST['password'];
	
	$db = mysqli_connect("localhost", "root","", "assignment")  
			or die(mysqli_error($db));

	$q = "insert into user values(null,'$username', '$password')";
	
	mysqli_query($db, $q) or die(mysqli_error($db));
	
	header("Location:index.php");
?>