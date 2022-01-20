<?php
/**
 * Author:
 * Date: $(DATE)
 * File: $(FILE_NAME)
 * Description:
 */


$page_title = "Remove Record";
require_once 'includes/header.php';
require_once('includes/database.php');

//if record id cannot retrieved, terminate the script.
if (!filter_has_var(INPUT_GET, 'id')) {
    $error = "There was a problem retrieving remove id.";
    header("Location: error.php?m=$error");
    die();
}

//retrieve record id from a query string variable.
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

//SQL statement for deletion
$sql = "DELETE FROM $tblRecords WHERE id=$id";

//execut the query
$query = $conn->query($sql);

//Handle errors
if (!$query) {
    $error = "Deletion failed: $conn->error.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}

//proceed since query executed successfully.
echo "<p>The record has been successfully deleted from the database.</p>";
$conn->close();
require_once 'includes/footer.php';