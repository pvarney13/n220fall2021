<?php
/**
 * Author:
 * Date: $(DATE)
 * File: $(FILE_NAME)
 * Description:
 */

//define parameters
$host = "localhost";
$login = "phpuser";
$password = "phpuser";

$database = "recordstore_db";
$tblRecords = "records";
$tblCategories = "categories";


//Connect to the mysql server
$conn = @new mysqli($host, $login, $password, $database);

//Handle connection errors
if ($conn->connect_errno) {
    $error = $conn->connect_error;
    header("Location: error.php?m=$error");
    die();
}

/*
if (isset($_POST['filter'])) {
    $category = $_POST['categories'];

    $query = mysqli_query($conn, "SELECT * FROM `categories` WHERE `category`='$category'") or die(mysqli_error());
    while ($fetch = mysqli_fetch_array($query)) {
         "<tr><td>" . "</td><td>" . $fetch['category'] . "</td></tr>";
    }
} else if (isset($_POST['reset'])) {
    $query = mysqli_query($conn, "SELECT * FROM `categories`") or die(mysqli_error());
    while ($fetch = mysqli_fetch_array($query)) {
         "<tr><td>" . "</td><td>" . $fetch['category'] . "</td></tr>";
    }
} else {
    $query = mysqli_query($conn, "SELECT * FROM `categories`") or die(mysqli_error());
    while ($fetch = mysqli_fetch_array($query)) {
        "<tr><td>" . "</td><td>" . $fetch['category'] . "</td></tr>";
    }
}
*/
