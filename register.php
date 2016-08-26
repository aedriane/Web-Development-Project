<?php
	$page_title="Register";

	include("include/header.inc");
	include("include/nav.inc");
	include("include/rotate.inc");
 ?>

 	<div id="form">
    <h1>Register</h1>
    	<form method="post" action="processregister.php">
        <p><input type="text" name="username" value="" placeholder="Username"></p>
        <p><input type="password" name="password" value="" placeholder="Password"></p>
        <p class="submit"><input type="submit" name="commit" value="Register"></p>
        </form>
    </div>

<?php

	include("include/loginfooter.inc");
?>