<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header("Location:notice.php");
		exit(0);
	}

	$page_title="My Cart";
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
        align:center;
        font-family: 'QuestrialRegular',Arial,Helvetica,sans-serif;
        font-weight: 100;
        text-transform: uppercase;
        letter-spacing: .2em;
        text-align:center;
    }

</style>

</head>

<div id="upcoming">
    <p>Your Cart</p>
</div>

<?php
if(!isset($_SESSION['cart']))
{
	$_SESSION['cart'] = array();
	print "<h2>Cart Empty</h2>";
}
else
{
	$db = mysqli_connect("localhost","root","","assignment") or die(mysqli_error());

    print '<table border="1">';
        print "<tr>";
            print "<th>Name</th>
                <th>Price</th>
                <th>Image</th>";
        print "</tr>";
        foreach($_SESSION['cart'] as $id)
        {
			$results = mysqli_query($db, "select * from items where id = $id") or die(mysqli_error());
			$row = mysqli_fetch_array($results);
			$valueNAME=$row["name"];
            $valuePrice=$row["price"];
            $valueImg="<img src='image/{$row['image']}' height=150/>";
            print "<tr>";
                print "<td>$valueNAME</td>";
                print "<td>$valuePrice</td>";
                print "<td>$valueImg</td>";
            print "<tr>";
		}
    print "</table>";
}
?>

<?php
    include("include/displayfooter.inc")
?>

