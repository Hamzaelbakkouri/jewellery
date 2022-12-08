<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>
<div class="container">
    <a href="index.php?controller=product&action=add" class="btn btn-primary">Add</a>
    <table class="table">
        <thead>
            <th>Name</th>
            <th>price</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php
            foreach ($data as $product) {
            ?>
                <tr>
                    <td><?= $product['name'] ?></td>
                    <td><?= $product['price'] ?></td>
                    <td><?= $product['quantiry'] ?></td>
                    <td>
                        <a href="index.php?controller=product&action=edit&id=<?= $student['id'] ?>" class="btn btn-danger">Edit</a>
                        <a href="index.php?controller=product&action=delete&id=<?= $student['id'] ?>" class="btn btn-primary">Delete</a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
        <!-- <tr>
            <td>Anh</td>
            <td>anhct.poly@gmail.com</td>
            <td>0379723021</td>
            <td>
                <a href="#" class="btn btn-danger">Edit</a>
                <a href="#" class="btn btn-primary">Edit</a>
            </td>
        </tr> -->

        </body>

</html>