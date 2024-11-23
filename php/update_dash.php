<?php 



require("../inc/db.php");

if (isset($_POST['editsub'])) {
    $id = $_POST['id'];
    $item = $_POST['item'];
    $price = $_POST['price'];
    $comment = $_POST['comment'];
    
    $up_query = "UPDATE `sells` SET `size`='$item',`comment`='$comment',`price`='$price' WHERE ID = $id";
    mysqli_query($conn , $up_query);
    header("location:./dashboard.php");
}

?>
