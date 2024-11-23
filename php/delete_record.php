<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) {
    require("../inc/db.php"); // Include your database connection here

    $id = $_POST["id"];
    $delete_query = "DELETE FROM `sells` WHERE `id` = $id";
    if (mysqli_query($conn, $delete_query)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
