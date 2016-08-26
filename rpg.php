<?php
    session_start();
        if(!isset($_SESSION['username']))
    {
        header("Location:notice.php");
        exit(0);
    }

    $page_title="RPG";

	include("include/header.inc");
	include("include/nav.inc");
	include("include/rotate.inc");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<style>

	table 
	{
   		width: 50%;
    	margin-left: auto;
    	margin-right: auto;
	}

</style>

</head>

<body>

<div id="upcoming">
<p>Role Playing Games</p>
</div>

<?php
	$db = mysqli_connect("localhost", "root","", "assignment")  
            or die(mysqli_error($db));

	$q = "select * from items where genre = 'Role-Playing Game'";

	$results = mysqli_query($db, $q) 
            or die(mysqli_error($db));

    echo "<table width='500' border='0' cellpadding='5'>";
    
    while($row=mysqli_fetch_array($results))
    {
		echo "<tr>" .

		"<td align='center' valign='center'>" .
		"<td><a href='rpgitem.php?id={$row['id']}'><img src='image/{$row['image']}'></a></td>" .
		"<br />" .
		"<td><div id='itemText'>{$row['name']}</div></td>" .
		"<br />" .
		"<td><div id='itemText'>{$row['price']}</div></td>" .
		"</td>" .

		"</div>";
    }

	echo "</table>";
?>

<?php
	include("include/footer.inc");
?>
