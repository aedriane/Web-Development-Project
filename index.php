<?php
 //class with the required methods
 $imp = new DOMImplementation();

 //create the DOCTYPE - html
 $doctype = $imp->createDocumentType('html');

 //create the document with html as the root element and with
//the previous DOCTYPE
 $document = $imp->createDocument(null, 'html', $doctype);
 

 //get reference to the root element (node) to append other
//nodes to.
 $html = $document->documentElement;

 //create head and body nodes
 $head = $document->createElement('head');
 $body = $document->createElement('body');

 //append head and body nodes to root node (html).
 $html->appendChild($head);
 $html->appendChild($body);

 //create and append title node, with text
 $title = $document->createElement('title');
 $head->appendChild($title);
 $title_text = $document->createTextNode('Home');
 $title->appendChild($title_text);

 //and the meta element for the character encoding
 $meta = $document->createElement('meta');
 $head->appendChild($meta);
 $charset = $document->createAttribute('charset');
 $charset->value = 'UTF-8';
 $meta->appendChild($charset);

 $document->formatOutput = true;
 print $document->saveHTML();
?>

<?php
	session_start();

	include("include/header.inc");
	include("include/nav.inc");
	include("include/rotate.inc");
 ?>

<!DOCTYPE html>
<html>
<head>
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
<p>Upcoming Releases</p>
</div>

<?php
	$db = mysqli_connect("localhost", "root","", "assignment")  
            or die(mysqli_error($db));

	$q = "select * from items where availability = 'Upcoming'";

	$results = mysqli_query($db, $q) 
            or die(mysqli_error($db));

    echo "<table width='500' border='0' cellpadding='5'>";
    
    while($row=mysqli_fetch_array($results))
    {
		echo "<tr>" .

		"<td align='center' valign='center'>" .
		"<td><a href='upcomingitem.php?id={$row['id']}'><img src='image/{$row['image']}'></a></td>" .
		"<br />" .
		"<td><div id='itemText'>{$row['name']}</div></td>" .
		"<br />" .
		"<td><div id='itemText'>{$row['price']}</div></td>" .
		"</td>";
    }

	echo "</table>";
?>

<?php
	include("include/footer.inc");
?>




	







</body>
</html>