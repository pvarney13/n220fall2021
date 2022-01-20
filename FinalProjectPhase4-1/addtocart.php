<?php
/**
 * Author: Matthew Schrader
 * Date: 12/2/2021
 * File: addtocart.php
 * Description: */

/**
 * Author: Matthew Schrader
 * Date: 11/16/2021
 * File: addtocart.php
 * Description: */

//start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
//retrieve session variable and store
if (isset($_SESSION['cart'])) {
    $cart = $_SESSION['cart'];
} else {
    $cart = array();
}
//retrieve book id and query then display error if applicable

$id = '';
if (filter_has_var(INPUT_GET, 'id')) {
    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
}
// If book id is empty, it is invalid.
if (!$id) {
    $error = "Invalid book id detected. Operation cannot proceed.";
    header("Location: error.php?m=$error");
    die();
}
//incrememnt if more than one in cart
if (array_key_exists($id, $cart)) {
    $cart[$id] = $cart[$id] + 1;
} else {
    $cart[$id] = 1;
}
//update the session variable
$_SESSION['cart'] = $cart;
//redirect to the shoppingcart.php page.
header('Location: shoppingcart.php');


