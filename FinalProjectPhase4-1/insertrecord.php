<?php
/**
 * Author: Piper Varney
 * Date: 11/30/21
 * File: insertrecord.php
 * Description:
 */

//Do not proceed if there are no post data
if (!$_POST) {
    $error = "Direct access to this script is not allowed.";
    header("Location: error.php?m=$error");
    die();
}

//if the script did not receive post data, display an error message and then terminite the script immediately
if (!filter_has_var(INPUT_POST, 'title') ||
    !filter_has_var(INPUT_POST, 'artist') ||
    !filter_has_var(INPUT_POST, 'length') ||
    !filter_has_var(INPUT_POST, 'release_date') ||
    !filter_has_var(INPUT_POST, 'price') ||
    !filter_has_var(INPUT_POST, 'image') ||
    !filter_has_var(INPUT_POST, 'description') ||
    !filter_has_var(INPUT_POST, 'category_id')) {

    echo "There were problems retrieving book details. New book cannot be added.";
    header("Location: error.php?m=$error");
    die();
}

//include code from database.php file
require_once('includes/database.php');

// Retrieve record details.

$title = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING)));
$artist = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'artist', FILTER_SANITIZE_STRING)));
$length = $conn->real_escape_string(filter_input(INPUT_POST, 'length', FILTER_DEFAULT));
$release_date = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_STRING)));
$price = $conn->real_escape_string(filter_input(INPUT_POST, 'price', FILTER_DEFAULT));
$image = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'image', FILTER_SANITIZE_STRING)));
$description = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING)));
$category_id = $conn->real_escape_string(trim(filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_STRING)));

//SQL insert statement
$sql = "INSERT INTO $tblRecords VALUES (NULL, '$title', '$artist', '$length', '$release_date','$price', '$image', '$description',   '$category_id')";

//execute the query
$query = @$conn->query($sql);

//Handle errors
if (!$query) {
    $error = "Insertion failed: $conn->error.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}

//determine the book id
$id = $conn->insert_id;

//close the database connection
$conn->close();
header("Location: details.php?id=$id&m=insert");
