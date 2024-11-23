<?php
require("./inc/db.php");
$select_query = "SELECT * FROM `price`";
$result = mysqli_query($conn, $select_query);
$row = mysqli_fetch_all($result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>victoria</title>
    <link rel="stylesheet" href="./style/bootstrap.css">
    <script src="./javascript/bootstrap.js"></script>
</head>

<body>
    <?php include("./php/nav/index_nav.php"); ?>
    <div class="card-group mx-3 my-5 py-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title fs-2 fw-bold">Small</h5>
                <p class="card-text fs-5 text-success">
                    <?php echo ($row[2][1]); ?><span>$</span>
                </p>
                <div class="d-grid gap-2">
                    <a class="btn btn-primary" href="./php/submit.php?size=small&&price=<?php echo ($row[2][1]); ?>"
                        role="button">Sell</a>
                </div>
                <p class="card-text"><small class="text-body-secondary">
                        <?php ?>
                    </small></p>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <h5 class="card-title fs-2 fw-bold">Medium</h5>
                <p class="card-text fs-5 text-success">
                    <?php echo ($row[1][1]); ?><span>$</span>
                </p>
                <div class="d-grid gap-2">
                    <a class="btn btn-primary" href="./php/submit.php?size=medium&&price=<?php echo ($row[1][1]); ?>"
                        role="button">Sell</a>
                </div>
                <p class="card-text"><small class="text-body-secondary"></small></p>
            </div>
        </div>
        <div class="card">

            <div class="card-body">
                <h5 class="card-title fs-2 fw-bold">Large</h5>
                <p class="card-text fs-5 text-success">
                    <?php echo ($row[0][1]); ?><span>$</span>
                </p>
                <div class="d-grid gap-2">
                    <a class="btn btn-primary" href="./php/submit.php?size=large&&price=<?php echo ($row[0][1]); ?>"
                        role="button">Sell</a>
                </div>
                <p class="card-text"><small class="text-body-secondary"></small></p>
            </div>
        </div>
    </div>
    <hr>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-dark mx-3 my-5" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add custom
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Insert Custom Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="./php/insert_custom.php" method="post">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Item</label>
                            <input type="text" class="form-control" id="formGroupExampleInput"
                                placeholder="Item" required name="item">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Price</label>
                            <input type="number" class="form-control" id="formGroupExampleInput"
                                placeholder="Price" name="price">
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                                style="height: 100px" name="comment"></textarea>
                            <label for="floatingTextarea2" >Comments</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Close</button>
                        <button type="submit" class="btn btn-primary" name="customsub">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>