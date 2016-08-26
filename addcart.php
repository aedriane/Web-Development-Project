<?php
$page_title="Added to cart";
    include("include/header.inc");
    include("include/nav.inc");
    include("include/rotate.inc");

    session_start();
    if(!isset($_SESSION['cart']))
    {
        $_SESSION['cart'] = array();
    }
    $id = $_GET['id'];
    $_SESSION['cart'][] = $id;

?>
        <div id="added">
        <h1>Item added to cart</h1>
        </br>
        </br>
        <h5><a href='displaycart.php'>Display My Cart</a></h5>
        </br>
        <h5><a href='index.php'>Back to Home</a></h5>
        </div>
<?php
    include("include/addfooter.inc");
?>
