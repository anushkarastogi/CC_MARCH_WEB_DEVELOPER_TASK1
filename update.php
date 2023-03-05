<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comaptible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Update</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

    </head>

    <?php
    include "config.php";
    $id = $_GET['Id'];
    $Rdata = mysqli_query($con, "select * from tbltodo where ID=$id");
    $data=mysqli_fetch_array($Rdata);
    ?>
    <body class="bg-info">
    <form action="update1.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h3 class="text-center text-primary font-monospace">Update</h3>
                <div class="col-10">
                    <input type="text" value="<?php echo $data['list']?>" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary">Update</button>
                    <input type="hidden" name="id" value="<?php echo $data['ID']?>">
                </div>
            </div>
        </div>
        </form>
    </body>
</html>