<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comaptible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/c35a06f519.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <form action="insert.php" method="POST">
        <div class="container">
            <div class="row justify-content-center m-auto shadow bg-white mt-3 py-3 col-md-6">
                <h3 class="text-center text-primary font-monospace">TODO LIST</h3>
                <div class="col-8">
                    <input type="text" name="list" class="form-control">
                </div>
                <div class="col-2">
                    <button class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i></button>
                </div>
            </div>
        </div>
        </form>

        <?php
        include "config.php";
        $rawData= mysqli_query($con, "select * from tbltodo");
        ?>
        <div class="container">
            <div class="col-8 bg-white m-auto mt-3">

        <table class="table">
            <tbody>
                <?php
                while($row=mysqli_fetch_array($rawData)){
                ?>
                <tr>
                    <td><?php echo $row['list'] ?></td>
                    <td style="width: 10%;"><a href="delete.php? Id=<?php echo $row['ID'] ?>" class="btn btn-outline-danger"><i class="fa-solid fa-delete-left"></i></a></td>
                    <td style="width: 10%;"><a href="update.php? Id=<?php echo $row['ID'] ?>" class="btn btn-outline-success"><i class="fa-sharp fa-solid fa-pen-to-square"></i></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div>
        <div>
    </body>
</html>