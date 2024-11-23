<?php require("../inc/db.php");
$select_query = "SELECT * FROM `price`";
$result = mysqli_query($conn, $select_query);
$row = mysqli_fetch_all($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <script src="../javascript/bootstrap.js"></script>
</head>

<body>
    <?php include("./nav/settings_nav.php"); ?>

    <div class="card my-4 mx-2">
        <h5 class="card-header">Edit Price</h5>
        <div class="card-body">
            <h5 class="card-title"></h5>
            <form action="edit_price.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Small</span>
                    <input type="number" class="form-control  fs-5 fw-bold" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" value="<?php echo ($row[2][1]); ?>" name="sml"
                        required step="any">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">medium</span>
                    <input type="number" class="form-control  fs-5 fw-bold" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" value="<?php echo ($row[1][1]); ?>" name="med"
                        required step="any">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">large</span>
                    <input type="number" class="form-control  fs-5 fw-bold" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default" value="<?php echo ($row[0][1]); ?>" name="lar"
                        required step="any">
                </div>

                <center>
                    <div class="btn-group" role="group" aria-label="Default button group">
                        <button type="submit" class="btn btn-success" name="sub">Save Changes</button>
                        <a class="btn btn-danger" href="<?php echo ($_SERVER['PHP_SELF']); ?>" role="button">Reset</a>
                    </div>
                </center>
            </form>
            <p class="card-text my-3">enter only real numbers without any symbol</p>
        </div>
    </div>

    <div class="card my-2 mx-2">
        <div class="card-header">
            Start New Day
        </div>
        <div class="card-body">
            <h5 class="card-title">end day / Start new day</h5>
            <p class="card-text">starting new day will delete everything in the dashboard and start with a new data </p>
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Start new day
            </button>
        </div>
    </div>
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Start new day , are you sure ?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-footer">
                    <a class="btn btn-primary" href="drop.php" role="button">submit</a>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>