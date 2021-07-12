
<div class="container">
    <a href="indexproduct.php?page=create-product">ADD PRODUCT</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Product Name</th>
            <th scope="col">Image</th>
            <th scope="col">SKU</th>
            <th scope="col">Detail</th>
            <th scope="col">Category</th>
            <th scope="col">Brand</th>
            <th scope="col">Size</th>
            <th scope="col">Price</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($products)) {
            foreach ($products as $product) :?>
                <tr>
                    <th scope="row"><?php echo $product->getId() ?></th>
                    <td><?php echo $product->getName() ?></td>
                    <td><img width="150px" src="<?php echo $product->getUrlImage() ?>" alt=""></td>
                    <td><?php echo $product->getSku() ?></td>
                    <td><?php echo $product->getDetail() ?></td>
                    <td><?php echo $product->getCategoryId() ?></td>
                    <td><?php echo $product->getBrandId() ?></td>
                    <td><?php echo $product->getSize() ?></td>
                    <td><?php echo $product->getPrice() ?></td>
                    <td><a href="indexproduct.php?page=update-product&id=<?php echo $product->getId()?>" class="btn btn-warning btn-lg">Edit</a></td>
                    <td><a href="indexproduct.php?page=delete-product&id=<?php echo $product->getId()?>" class="btn btn-danger btn-lg">Delete</a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>

<?php include_once '../layout/footer.php' ?>
