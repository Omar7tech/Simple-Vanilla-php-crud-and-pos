<?php

if (isset($_POST['customsub'])) {
    require("../inc/db.php");
    print_r($_POST);
    date_default_timezone_set('Asia/Beirut');
    $date = date("d/m/y");
    $time = date("h:i:s");
    $item = $_POST['item'];
    $price = $_POST['price'];
    $comment = $_POST['comment'];
    $insert_query = "INSERT INTO `sells`(`size`, `time`, `date`, `comment`, `price`) VALUES ('$item','$time','$date','$comment','$price')";
    mysqli_query($conn, $insert_query);
    header("location:../index.php");


}



?>