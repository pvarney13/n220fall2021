<?php
/**
 * Author: Matthew Schrader
 * Date: 11/11/2021
 * File: searchitems.php
 * Description: */
$page_title = "Search Records";

include ('includes/header.php');
?>
    <h2 id="search">Search Records by Title</h2>
    <form action="searchitemsresults.php" method="get">
        <input type="text" name="q" size="40" required />&nbsp;&nbsp;
        <input type="submit" name="Submit" id="Submit" value="Search Records" />
    </form>
    <br>
<?php
include ('includes/footer.php');