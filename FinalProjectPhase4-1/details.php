<?php
$page_title = "Record Details";
require_once ('includes/header.php');
require_once ('includes/database.php');

//if record id cannot be retrieved, terminate the script.
if (!filter_has_var(INPUT_GET, "id")) {
    $error = "Your request cannot be processed since there was a problem retrieving 
 book id.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}

//retrieve record id from a query string variable.
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

//select statement
$sql = "SELECT * FROM $tblRecords WHERE id=$id";

//execute the query
$query = $conn->query($sql);

//Handle errors
if (!$query) {
    $error = "Selection failed: " . $conn->error;
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}
$row = $query->fetch_assoc();
if (!$row) {
    $error = "Record not found";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}


?>

    <h2>Record Details</h2>
    <div class="recorddetails">
        <div class="cover">
            <!-- display book image -->
            <img src="<?= $row['image'] ?>">
        </div>
        <div class="label">
            <!-- display book attributes  -->
            <div>Title:</div>
            <div>Artist:</div>
            <div>Length:</div>
            <div>Release Date:</div>
            <div>Price:</div>
            <div>Description:</div>
        </div>
        <div class="content">
            <!-- display book details -->
            <div><?= $row['title'] ?></div>
            <div><?= $row['artist'] ?></div>
            <div><?= $row['length'] ?></div>
            <div><?= $row['release_date'] ?></div>
            <div><?= $row['price'] ?></div>
            <div><?= $row['description'] ?></div>
        </div>
        <a href="addtocart.php?id=<?= $id ?>">
            <img src="img/addtocarts.jpeg" id="addtocart">
        </a>
    </div>
<?php
$confirm = "";
if(isset($_GET['m'])) {
    if ($_GET['m'] == "insert") {
        $confirm = "You have successfully added the new record.";
    }   else if ($_GET['m'] == "update") {
        $confirm = "Your record has been successfully updated.";
    }
}
?>
    <div class="recordstore-button">
        <div style="color: red; display: inline-block;"><?= $confirm ?></div>
        <input type="button"
               onclick="window.location.href='editrecord.php?id=<?= $id ?>'"
               value="Edit">
        <input type="button" value="Delete"
               onclick="window.location.href='removerecord.php?id=<?= $id ?>'">
        <input type="button"
               onclick="window.location.href='records.php'"
               value="Cancel">

    </div>
<?php
require('includes/footer.php');
?>