<?php
	$page_title="Log In";

	include("include/header.inc");
	include("include/nav.inc");
	include("include/rotate.inc");
?>

 	<div id="form">
    <h1>Log In to Website</h1>
    	<form method="post" action="processlogin.php">
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
        </form>
    </div>

<?php

	include("include/loginfooter.inc");
?>