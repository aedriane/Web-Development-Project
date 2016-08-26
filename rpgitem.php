<?php
    session_start();
        if(!isset($_SESSION['username']))
    {
        header("Location:notice.php");
        exit(0);
    }
    
    $page_title="Item";

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

<div id="upcoming">
<p>Adventure</p>
</div>

 <?php 
	$id = $_GET['id'];


    $db = mysqli_connect("localhost", "root","", "assignment") 
             or die(mysqli_error($db));

	$q = "select * from items where genre = 'Role-Playing Game' and id=$id";

	$results = mysqli_query($db, $q) 
            or die(mysqli_error($db));

    echo "<table width='500' border='0' cellpadding='5'>";
    
    while($row=mysqli_fetch_array($results))
    {
        echo "<tr>" .

        "<td align='center' valign='center'>" .
        "<td><img src='image/{$row['image']}'</td>" .
        "<td>" .
        "<ul style='list-style-type:none'>" .
        "<li><div id='itemText'>Name:  {$row['name']}</div><li>" .
        "<li><div id='itemText'>Price: {$row['price']}</div></li>" .
        "<li><div id='itemText'>Region:    {$row['region']}</div></li>" .
        "<li><div id='itemText'>Platform:  {$row['platform']}</div></li>" .
        "<li><div id='itemText'>Genre: {$row['genre']}</div></li>" .
        "<li align='center'><a href='addcart.php?id={$row['id']}' class='button'>Add to Cart</a></li>" .
        "</ul>" .
        "</td>";
    }

    echo "</table>";
 
?>
 
 <?php 
    include("include/individualfooter.inc");
 ?>