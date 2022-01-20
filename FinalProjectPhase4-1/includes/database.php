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

$title =


//Connect to the mysql server
$conn = @new mysqli($host, $login, $password, $database);

//Handle connection errors
if ($conn->connect_errno) {
    $error = $conn->connect_error;
    header("Location: error.php?m=$error");
    die();
}
