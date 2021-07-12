
<div class="container">
    <form method="post"  enctype="multipart/form-data">
        <h3>UPDATE CATEGORY</h3>
        <?php if(isset($category)) :?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" required class="form-control" id="name" name="name" value="<?php echo $category->getName()?>">
            </div>
            <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control" id="image" name="fileToUpload">
            </div>
            <div class="mb-3">
                    <img height="150px" src="<?php echo $category->getUrlImage()?>" alt="<?php echo $category->getUrlImage()?>">
            </div>

            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                <input type="text" required class="form-control" id="detail" name="detail" value="<?php echo $category->getDetail()?>">
            </div>
        <?php endif ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php include_once '../layout/footer.php' ?>