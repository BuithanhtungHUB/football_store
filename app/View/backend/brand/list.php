<!DOCTYPE html>
<html lang="en">
<head>
    <title>BRAND LIST</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="btn btn-info btn-md" href="index.php">Home</a>
    <form class="form-inline" method="post">
        <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search">
        <button class="btn btn-success" type="submit" name="find">Search</button>
    </form>
</nav>
<br>
<div class="container">
    <h2>BRAND LIST</h2>
    <a class="btn btn-info btn-lg" href="brand.php?page=create-brand">ADD BRAND</a>
    <br>
    <br>
    <table class="table">
        <thead class="">
        <tr class="table-primary">
            <th scope="col">Id</th>
            <th scope="col">Brand Name</th>
            <th scope="col">Image</th>
            <th scope="col">Detail</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($brands)) {
            foreach ($brands as $brand) :?>
                <tr>
                    <th scope="row"><?php echo $brand->getId() ?></th>
                    <td><?php echo $brand->getName() ?></td>
                    <td><img width="100px" src="<?php echo $brand->getUrlImage() ?>" alt=""></td>
                    <td><?php echo $brand->getDetail() ?></td>
                    <td><a href="brand.php?page=update-brand&id=<?php echo $brand->getId() ?> "
                           class="btn btn-warning btn-circle">Edit</a></td>
                    <td><a href="brand.php?page=delete-brand&id=<?php echo $brand->getId() ?> "
                           class="btn btn-danger btn-circle">Delete</a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>

</body>
</html>
<!-- /.container-fluid -->




