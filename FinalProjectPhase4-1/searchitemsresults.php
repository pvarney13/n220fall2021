<?php
/**
 * Author: Matthew Schrader
 * Date: November 11 2021
 * Name: searchitemresults.php
 * Description: searches database
 * @var $tblCategories
 * @var $tblRecords
 * @var $conn
 */
$page_title = " Vinyl Search results";

require_once('includes/header.php');
require_once('includes/database.php');

//retrieve search term
if (!filter_has_var(INPUT_GET, "q")) {
    $error = "There was no search terms found.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}
//filter input
$term = filter_input(INPUT_GET, 'q', FILTER_SANITIZE_STRING);

//explode the search terms into an array
$terms = explode(" ", $term);

//select statement using pattern search.
$sql = "SELECT id, title, artist, price, category
        FROM $tblRecords, $tblCategories
        WHERE $tblRecords.category_id = $tblCategories.category_id AND ";
foreach ($terms as $t) {
    $sql .= "title LIKE '%$t%' AND ";
}

$sql = rtrim($sql, "AND "); //remove the extra "AND " at the end of the string

//execute the query
$query = $conn->query($sql);

//Handle selection errors
if (!$query) {
    $error = "Selection failed: " . $conn->error;
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}
?>
    <h2>Vinyl Search results for:</h2>
<?php
if ($query->num_rows == 0) {
    echo "Your search '$term' did not match any records in our inventory";
    include('includes/footer.php');
    exit;
}
?>
    <h2>Records in Our Store</h2>
    <div class="records">
        <div class="row header">
            <div class="col1">Title</div>
            <div class="col2">Artist</div>
            <div class="col3">Category</div>
            <div class="col4">Price</div>
        </div>

        <!-- display records from the "records" table -->
        <?php while ($row = $query->fetch_assoc()) { ?>
            <div class="row">
                <div class="col1"><a href="details.php?id=<?= $row['id'] ?>"><?= $row['title'] ?></a></div>
                <div class="col2"><?= $row['artist'] ?></div>
                <div class="col3"><?= $row['category'] ?></div>
                <div class="col4"><?= $row['price'] ?></div>
            </div>
        <?php } ?>
    </div>
<?php
include('includes/footer.php');