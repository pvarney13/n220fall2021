<?php
/**
 * Author: Piper Varney
 * Date: 11/30/21
 * File: logout.php
 * Description:
 */

//start session if it has not already started
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//unset all the session variables
$_SESSION = array();

//delete the session cookie
setcookie(session_name(), "", time() - 3600);

//destroy the session
session_destroy();

$page_title = "PHP Online Bookstore Logout";
include ('includes/header.php');
?>

<h2>Logout</h2>
<p>Thank you for your visit. You are now logged out.</p>

<?php
include ('includes/footer.php');