
<div class="container">
    <a href="indexcategory.php?page=create-category">ADD CATEGORY</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Category</th>
            <th scope="col">Image</th>
            <th scope="col">Detail</th>
            <th scope="col" colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php if (isset($categories)) {
            foreach ($categories as $category) :?>
                <tr>
                    <th scope="row"><?php echo $category->getId() ?></th>
                    <td><?php echo $category->getName() ?></td>
                    <td><img width="200px" src="<?php echo $category->getUrlImage() ?>" alt=""></td>
                    <td><?php echo $category->getDetail() ?></td>
                    <td><a href="indexcategory.php?page=update-category&id=<?php echo $category->getId()?>" class="btn btn-warning btn-lg">Edit</a></td>
                    <td><a href="indexcategory.php?page=delete-category&id=<?php echo $category->getId()?>" class="btn btn-danger btn-lg">Delete</a></td>
                </tr>
            <?php endforeach;
        } ?>
        </tbody>
    </table>
</div>

<?php include_once '../layout/footer.php' ?>

