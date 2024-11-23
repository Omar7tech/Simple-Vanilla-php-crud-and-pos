<?php require("../inc/db.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <script src="../javascript/bootstrap.js"></script>
</head>

<body>
    <?php include("./nav/dash_nav.php"); ?>

    <?php
    $select_query = "SELECT * FROM `sells`";
    $result = mysqli_query($conn, $select_query);
    $t_cont = "";
    $i = 0;
    $totalSells = 0; // Initialize total sells
    $totalPrice = 0; // Initialize total price
    while ($row = mysqli_fetch_array($result)) {
        $t_cont .= "<tr data-id=\"" . $row[0] . "\">
                    <td class=\"fw-bold text-primary\">" . ($i + 1) . "</td>
                    <td>" . $row[1] . "</td>
                    <td class=\"fw-bold text-success\">" . $row[5] . "</td>
                    <td>" . $row[3] . "</td>
                    <td>" . $row[2] . "</td>
                    <td>" . $row[4] . "</td>
                    <td>" . '<div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
                        <button type="button" class="btn btn-outline-primary" onclick="editRecord(' . $row[0] . ')">edit</button>
                        <button type="button" class="btn btn-outline-danger" onclick="deleteRecord(' . $row[0] . ')">delete</button>
                    </div>' . "</td>
                </tr>";
        $i++;
        $totalSells += 1; // Increment total sells for each row
        if (is_numeric($row[5])) {
            $totalPrice += $row[5];
        }
    }
    ?>

    <div class="card">
        <div class="card-header">
            more information
        </div>
        <div class="card-body">
            <h5 class="card-title">Statistics :</h5>
            <p class="my-3">Total Price : <span class="fw-bold fs-5 font-monospace text-success"><?php echo $totalPrice?></span>$</p>
            <p>Total Sells :<span class="fw-bold fs-5 font-monospace text-primary"> <?php echo $totalSells?></span></p>

        </div>
    </div>


    <div class="table-responsive">
        <table class="table">
            <thead class="table-info">
                <th>#</th>
                <th>item</th>
                <th>price</th>
                <th>date</th>
                <th>time</th>
                <th>comment</th>
                <th>Operation</th>
            </thead>

            <tbody>
                <?php echo $t_cont; ?>
            </tbody>
        </table>
    </div>

    <script>
        function deleteRecord(id) {
            if (confirm("Are you sure you want to delete this record?")) {
                const xhr = new XMLHttpRequest();
                xhr.open("POST", "delete_record.php", true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        console.log(xhr.responseText);
                        const rowToDelete = document.querySelector(`tr[data-id="${id}"]`);
                        if (rowToDelete) {
                            rowToDelete.remove();
                        }
                    }
                };
                xhr.send("id=" + id);
            }
            
        }

        function editRecord(id) {
            // Find the record in the table
            const row = document.querySelector(`tr[data-id="${id}"]`);

            // Extract data from the row's cells
            const item = row.cells[1].textContent;
            const price = row.cells[2].textContent.trim(); // Remove the $ symbol
            const comment = row.cells[5].textContent;

            // Populate the modal's input fields
            document.getElementById('editRecordId').value = id;
            document.getElementById('editItem').value = item;
            document.getElementById('editPrice').value = price;
            document.getElementById('editComment').value = comment;

            // Show the edit modal
            const editModal = new bootstrap.Modal(document.getElementById('editModal'));
            editModal.show();
        }

    </script>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Input fields for editing -->
                    <form id="editForm" method="post" action="update_dash.php">
                        <input type="hidden" id="editRecordId" name="id">
                        <div class="mb-3">
                            <label for="editItem" class="form-label">Item</label>
                            <input type="text" class="form-control" id="editItem" name="item">
                        </div>
                        <div class="mb-3">
                            <label for="editPrice" class="form-label">Price</label>
                            <input type="number" class="form-control" id="editPrice" name="price">
                        </div>
                        <div class="mb-3">
                            <label for="editComment" class="form-label">Comment</label>
                            <input type="text" class="form-control" id="editComment" name="comment">
                        </div>
                        <!-- Add more input fields for other columns -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit" name="editsub">Save Changes</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>


</body>

</html>