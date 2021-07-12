
<div class="container">
    <a href="indexbrand.php?page=create-brand">ADD BRAND</a>
    <table class="table">
        <thead>
        <tr>
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
                    <td><img width="200px" src="<?php echo $brand->getUrlImage() ?>" alt=""></td>
                    <td><?php echo $brand->getDetail() ?></td>
                    <td><a href="indexbrand.php?page=update-brand&id=<?php echo $brand->getId()?>" class="btn btn-warning btn-lg">Edit</a></td>
                    <td><a href="indexbrand.php?page=delete-brand&id=<?php echo $brand->getId()?>" class="btn btn-danger btn-lg">Delete</a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>

<?php include_once '../layout/footer.php' ?>
