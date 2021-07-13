<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="app/View/frontend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="app/View/frontend/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <?php include_once 'app/View/core/sidebar.php'?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php include_once 'app/View/core/topbar.php'?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <?php include_once 'router.php'?>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Products</h1>
    <a class="btn btn-success" href="product.php?page=create-product">ADD PRODUCT</a>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Product</th>
                        <th scope="col">Image</th>
                        <th scope="col">Sku</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Category</th>
                        <th scope="col">Brand</th>
                        <th scope="col">Size</th>
                        <th scope="col">Price</th>
                        <th scope="col" colspan="2">Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Product</th>
                        <th>Image</th>
                        <th>Sku</th>
                        <th>Detail</th>
                        <th>Category</th>
                        <th>Brand</th>
                        <th>Size</th>
                        <th>Price</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php if (isset($products)) {
                        foreach ($products as $product) :?>
                            <tr>
                                <th scope="row"><?php echo $product->getId() ?></th>
                                <td><?php echo $product->getName() ?></td>
                                <td><img width="100px" height="100px" src="<?php echo $product->getUrlImage() ?>" alt=""></td>
                                <td><?php echo $product->getSku() ?></td>
                                <td><?php echo $product->getDetail() ?></td>
                                <td><?php echo $product->getCategoryId() ?></td>
                                <td><?php echo $product->getBrandId() ?></td>
                                <td><?php echo $product->getSize() ?></td>
                                <td><?php echo $product->getPrice() ?></td>
                                <td><a href="product.php?page=update-product&id=<?php echo $product->getId()?>" class="btn btn-warning btn-circle"><i class="fas fa-edit"></i></a></td>
                                <td><a href="product.php?page=delete-product&id=<?php echo $product->getId()?>" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
                            </tr>
                        <?php endforeach;
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
