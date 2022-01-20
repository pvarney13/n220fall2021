<?php
/**
 * Author: Piper Varney
 * Date: 11/29/21
 * File: addrecord.php
 * Description:
 */

include "includes/header.php";
?>

<h2 style="color: indianred">Add New Record</h2>
<form action="insertrecord.php" method="post">
    <table cellspacing="0" cellpadding="3" style="border: 1px solid silver; padding:5px; margin-bottom: 10px">
        <tr>
            <td style="text-align: right; width: 100px">Title: </td>
            <td><input name="title" type="text" size="100" required /></td>
        </tr>
        <tr>
            <td style="text-align: right">Artist: </td>
            <td><input name="artist" type="text" size="40" required /></td>
        </tr>
        <tr>
            <td style="text-align: right">Category:</td>
            <td>
                <select name="category">
                    <option value="1">Alternative</option>
                    <option value="2">Rock</option>
                    <option value="3">Hip-Hip/Rap</option>
                    <option value="4">Independent Music</option>
                    <option value="5">Pop</option>
                </select>
            </td>
        </tr>

        <tr>
            <td style="text-align: right">Price: </td>
            <td><input name="price" type="number" step="0.01" required /></td>
        </tr>
        <tr>
            <td style="text-align: right">Image: </td>
            <td><input name="image" type="text" size="100" required /></td>
        </tr>
        <tr>
            <td style="text-align: right; vertical-align: top">Description:</td>
            <td><textarea name="description" rows="6" cols="65"></textarea></td>
        </tr>
    </table>
    <div class="recordstore-button">
        <input type="submit" value="Add Record" />
        <input type="button" value="Cancel" onclick="window.location.href='records.php'" />
    </div>
</form>
    <br><br>
<?php require('includes/footer.php');?>