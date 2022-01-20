<?php

//Do not proceed if there are no post data
if (!$_POST) {
    $error = "Direct access to this script is not allowed.";
    header("Location: error.php?m=$error");
    die();
}

//retrieve record id. Do not proceed if id was not found.
if (!filter_has_var(INPUT_POST, 'id')) {
    $error = "There was a problem retrieving record id.";
    header("Location: error.php?m=$error");
    die();
}

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

//include code from the database.php file
require_once('includes/database.php');

/* Proceed since id was successfully retrieved.
 * Retrieve book details.
 * For security purpose, call the built-in function real_escape_string to
 * escape special characters in a string for use in SQL statement.
 */
$title = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING)));
$artist = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'artist', FILTER_SANITIZE_STRING)));
$category_id = $conn->real_escape_string(filter_input(INPUT_POST, 'category', FILTER_DEFAULT));
$length = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'length', FILTER_SANITIZE_STRING)));
$release_date = $conn->real_escape_string(filter_input(INPUT_POST, 'release_date', FILTER_DEFAULT));
$price = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'price', FILTER_SANITIZE_STRING)));
$image = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING)));
$description = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING)));

//Define MySQL update statement
$sql = "UPDATE $tblRecords SET "
    . "title='$title', "
    . "artist='$artist', "
    . "category_id='$category_id', "
    . "length='$length', "
    . "release_date='$release_date', "
    . "price='$price', "
    . "image='$image', "
    . "description='$description' "
    . "WHERE id = $id";

//execute the query
$query = @$conn->query($sql);

//Handle errors
if (!$query) {
    $error = "Update failed: $conn->error.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}

// close the connection.
$conn->close();
header("Location: details.php?id=$id&m=update");
