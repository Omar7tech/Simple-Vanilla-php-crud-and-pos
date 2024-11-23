<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <script src="../javascript/bootstrap.js"></script>
</head>

<body>
    <nav class="navbar bg-body-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Confirm</a>
        </div>
    </nav>
    <form action="insert_s.php?size=<?php echo $_GET['size']; ?>&&price=<?php echo $_GET['price']; ?> &&date= <?php echo date("d/m/y"); ?> &&time=<?php date_default_timezone_set('Asia/Beirut');
               echo date("h:i:s"); ?>" method="post">
        <center>
            <div class="card  mb-3 py-5 my-5 mx-3">
                <div class="card-body">
                    <h5 class="card-title fs-2 fw-bold">Product :
                        <?php echo $_GET['size']; ?>-
                        <?php echo $_GET['price']; ?>$
                    </h5>
                    <p class="card-text">date:<span>
                            <?php echo date("d/m/y"); ?> - time:
                            <?php date_default_timezone_set('Asia/Beirut');
                            echo date("h:i:s"); ?>
                        </span></p>
                </div>
                <div class="mb-3 mx-5">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="add a comment"
                        name="comment"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mx-5 btn-lg" name="btnsub">Submit</button>
                <a href="../index.php" class="btn btn-danger mx-5 my-1" type="Submit">Cancel</a>
            </div>

        </center>
    </form>
</body>

</html>