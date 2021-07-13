<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Products</h1>
    <a class="btn btn-success" href="category.php?page=create-category">ADD CATEGORY</a>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Detail</th>
                        <th scope="col" colspan="2">Action</th>

                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th>Detail</th>
                        <th colspan="2">Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?php if (isset($categories)) {
                        foreach ($categories as $category) :?>
                            <tr>
                                <th scope="row"><?php echo $category->getId() ?></th>
                                <td><?php echo $category->getName() ?></td>
                                <td><img width="200px" src="<?php echo $category->getUrlImage() ?>" alt=""></td>
                                <td><?php echo $category->getDetail() ?></td>
                                <td><a href="category.php?page=update-category&id=<?php echo $category->getId()?>" class="btn btn-warning btn-circle"><i class="fas fa-edit"></i></a></td>
                                <td><a href="category.php?page=delete-category&id=<?php echo $category->getId()?>" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
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




