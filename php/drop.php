<?php
require("../inc/db.php");
$drop_query = "DELETE FROM sells;";
mysqli_query($conn , $drop_query);
header("location:../index.php");
?>