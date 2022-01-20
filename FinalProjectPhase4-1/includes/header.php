<?php
/**
 * Author: Piper Varney
 * Date: 11/1/21
 * File: index.php
 * Description:
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//retrieve cart content
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
    if ($cart) {
        $count = array_sum($cart);
    }
}

//variables for a user’s login, name, and role
$login = '';
$name = '';
$role = 0;

//if the use has logged in, retrieve login, name, and role.
if (isset($_SESSION['login']) AND isset($_SESSION['name']) AND
    isset($_SESSION['role'])) {
    $login = $_SESSION['login'];
    $name = $_SESSION['name'];
    $role = $_SESSION['role'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>"Indy" Records</title>
    <link type="text/css" rel="stylesheet" href="includes/recordstyle.css" />
</head>

<div>
<div id="banner">
    <div class="logo">
        <img src="img/recordlogo.jpg" alt="Indy Records" width="200" height="200">
    </div>

    <div class="banner-text">
        <div id="maintitle">
            "Indy" Records
        </div>

        <div id="subtitle">
            Your One Stop Shop to the Best Vinyls in Indianapolis
        </div>
    </div>

    <div class="shoppingcart">
        <a href="shoppingcart.php">
            <img src='img/shopping_cart.png' alt='Shopping cart' style='width: 100px; border: none'><br>
        </a>
    </div>
</div>

<div id="navbar">
    <ul>
        <li><a href="index.php" class="nav">HOME</a></li>
        <li><a href="records.php" class="nav">OUR RECORDS</a></li>
        <li><a href="searchitems.php" class="nav">SEARCH</a></li>
        <li><a href="weekly.php" class="nav">ALBUM OF THE WEEK</a></li>
        <li><a href="about.php" class="nav">ABOUT US</a></li>
        <li> <?php
            if ($role == 1) {
                echo "<a href='addrecord.php' class='nav'>ADD RECORD</a> || ";
            }
            if (empty($login))
                echo "<a href='loginform.php'class='nav'>LOGIN</a>";
            else {
                echo "<a href='logout.php' class='nav'>LOGOUT</a>";
                echo "<span style='color:salmon; float: right'>Welcome $name!</span>";
            }
            ?></li>
    </ul>
</div>