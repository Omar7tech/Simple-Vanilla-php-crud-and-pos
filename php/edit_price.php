<?php
require("../inc/db.php");

if (isset($_POST['sub'])) {
    $small_price = @$_POST['sml'];
    $medium_price = @$_POST['med'];
    $large_price = @$_POST['lar'];

    $update_query = "UPDATE price
            SET price = 
                CASE
                    WHEN size = 'small' THEN $small_price
                    WHEN size = 'medium' THEN $medium_price
                    WHEN size = 'large' THEN $large_price
                    ELSE price
                END;";

    mysqli_query($conn, $update_query);
    header("location:../index.php");
}

?>