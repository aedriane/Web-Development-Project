<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="assignment.css"/>

<script src="dropdown.js"></script>

<style>
.nav
{
  position: fixed;

  z-index: 9999;


    list-style:none;
    margin:0;
    padding:0;
    text-align:center;
top: 0;


  background-color: white;
  width:100%;
   border-bottom: 1px solid #cfdaea;


    
}

.nav li
{
    display:inline;
    overflow: visible;   
}

.nav a
{
    display:inline-block;
    padding:10px;
    font-family: 'QuestrialRegular',Arial,Helvetica,sans-serif;
    font-weight: 100;
    text-transform: uppercase;
    letter-spacing: .2em;
    padding: 1em .5em;
    text-decoration: none;
    color: black;
    
}

.nav a:hover
{
    color: #ff5269!important;
    border-color: #ff5269;
}

li a:hover, .dropdown:hover .dropbtn 
{
    color: #ff5269!important;
    border-color: #ff5269;
}

li.dropdown
{

    display: inline-block;

}

.dropdown-content 
{
    display: none;
    position: relative;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a 
{
    padding:10px;
    font-family: 'QuestrialRegular',Arial,Helvetica,sans-serif;
    font-weight: 100;
    text-transform: uppercase;
    letter-spacing: .2em;
    text-decoration: none;
    text-align: center;
    line-height: 1em!important;
    border: 1px solid black;
    display: inline-block;
    z-index: 100;
}

.dropdown-content a:hover 
{
    color: #ff5269!important;
    border-color: #ff5269;
}

.show 
{
    display:inline-block;
}

</style>
</head>

<body>

<div id="page">
    <ul class="nav">

        <li><a href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn" onclick="myFunction()">Catalogue</a>
                    <div class="dropdown-content" id="myDropdown">
                    <a href="action.php">Action</a>
                    <a href="adventure.php">Adventure</a>
                    <a href="rpg.php">RPG</a>
                    </div>
            </li>       
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="displaycart.php">Cart</a></li>
    </ul>
</div>






