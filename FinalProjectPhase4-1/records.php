<?php

$page_title = " Records in Our Store";
require_once ('includes/header.php');
require_once ('includes/database.php');

//SELECT statement to retrieve record id, title, artist, price, and category id from the records table.
$sql = "SELECT id, title, artist, price, category
        FROM $tblRecords, $tblCategories
        WHERE $tblRecords.category_id = $tblCategories.category_id";

//execute the query
$query = $conn->query($sql);

//Handle errors
if (!$query) {
    $error = "Selection failed: " . $conn->error;
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}
?>

    <body>
        <hr style="border-top:1px dotted #ccc;"/>
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form method="POST" action="">
                <div class="form-inline">
                    <label>Category:</label>
                    <select class="form-control" name="category">
                        <option value="Alternative">Alternative</option>
                        <option value="Rock">Rock</option>
                        <option value="Hip-Hop/Rap">Hip-Hop/Rap</option>
                        <option value="R&B">R&B</option>
                        <option value="Pop">Pop</option>
                        <option value="Electronic">Electronic</option>
                    </select>
                    <button class="btn btn-primary" name="filter">Filter</button>
                    <button class="btn btn-success" name="reset">Reset</button>
                </div>
            </form>
            <table class="table table-bordered">
                <thead class="alert-info">
                </thead>
                <thead>
                <?php include'filter.php'?>
                </thead>
            </table>
        </div>
    </div>
    </body>

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
require('includes/footer.php');

?>