<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['btnsub'])) {
    require("../inc/db.php");
    print_r($_GET);
    print_r($_POST);

    $size = $_GET['size'];
    $price = $_GET['price'];
    $date = $_GET['date'];
    $time = $_GET['time'];
    $comment = $_POST['comment'];


    $insert_query = "INSERT INTO `sells`(`size`, `time`, `date`, `comment`, `price`) VALUES ('$size','$time','$date','$comment','$price')";
    mysqli_query($conn, $insert_query);
    header("location:../index.php");
}


?>