<?php
/**
 * Author:
 * Date: $(DATE)
 * File: $(FILE_NAME)
 * Description:
 */

$page_title = "Edit Record Details";
require_once ('includes/header.php');
require_once('includes/database.php');

//if record id cannot retrieved, terminate the script.
if (!filter_has_var(INPUT_GET, "id")) {
    $error = "Your request cannot be processed since there was a problem retrieving book id.";
    $conn->close();
    header("Location: error.php?m=$error");
    die();
}

//retrieve record id from a query string variable.
$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT);

//MySQL SELECT statement
$sql = "SELECT * 
      FROM $tblRecords, $tblCategories
      WHERE records.category_id = categories.category_id
      AND id=$id";


//execute the query
$query = @$conn->query($sql);

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

    <h2>Edit Book Details</h2>
    <form action="updaterecord.php" method="post">
        <div class="recorddetails">
            <div class="label">
                <!-- display book attributes  -->
                <div>Title:</div>
                <div>Artist:</div>
                <div>Category:</div>
                <div>Length:</div>
                <div>Release Date:</div>
                <div>Price:</div>
                <div>Image:</div>
                <div>Description:</div>
            </div>

            <div class="content">
                <!-- display book details -->
                <div><input name="title" size="80" value="<?php echo $row['title'] ?>" required></div>
                <div><input name="artist" value="<?php echo $row['artist'] ?>" required></div>
                <div><select name="category">
                        <option value="1" <?= $row['category'] == 'Alternative' ? 'selected' : ''; ?>>Alternative</option>
                        <option value="2" <?= $row['category'] == 'Rock' ? 'selected' : ''; ?>>Rock</option>
                        <option value="3" <?= $row['category'] == 'Hip-Hop/Rap' ? 'selected' : ''; ?>>Hip-Hop/Rap</option>
                        <option value="4" <?= $row['category'] == 'R&B' ? 'selected' : ''; ?>>R&B</option>
                        <option value="5" <?= $row['category'] == 'Pop' ? 'selected' : ''; ?>>Pop</option>
                    </select>
                </div>
                <div><input name="length" value="<?php echo $row['length'] ?>" required></div>
                <div><input name="release_date" value="<?php echo $row['release_date'] ?>" required></div>
                <div><input name="price" type="number" step="0.01" value="<?php echo $row['price'] ?>" required></div>
                <div><input name="image" size="100" value="<?php echo $row['image'] ?>" required></div>
                <div><textarea name="description" rows="6" cols="65"><?php echo $row['description'] ?></textarea></div>
            </div>
        </div>
        <div class="recordstore-button">
            <input type="hidden" name="id" value="<?php echo $id ?>" />
            <input type="submit" value=" Update " />
            <input type="button" value="Cancel" onclick="window.location.href = 'details.php?id=<?= $id ?>'" />
        </div>
    </form>
<?php
// close the connection.
$conn->close();
require_once 'includes/footer.php';