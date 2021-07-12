<div class="container">
    <form method="post"  enctype="multipart/form-data">
        <h3>UPDATE PRODUCT</h3>
        <?php if(isset($product)):?>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" required class="form-control" id="name" name="name" value="<?php echo $product->getName()?>">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="fileToUpload">
            </div>
            <div class="mb-3">
                <img height="150px" src="<?php echo $product->getUrlImage()?>" alt="<?php echo $product->getUrlImage()?>">
            </div>
            <div class="mb-3">
                <label for="sku" class="form-label">SKU</label>
                <input type="text" required class="form-control" id="sku" name="sku" value="<?php echo $product->getSku()?>">
            </div>
            <div class="mb-3">
                <label for="detail" class="form-label">Detail</label>
                <input type="text" required class="form-control" id="detail" name="detail" value="<?php echo $product->getDetail()?>">
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Category</label>
                <input type="number" class="form-control" id="category" name="category_id" value="<?php echo $product->getCategoryId()?>">
            </div>
            <div class="mb-3">
                <label for="brand" class="form-label">Brand</label>
                <input type="number" class="form-control" id="brand" name="brand_id" value="<?php echo $product->getBrandId()?>">
            </div>
            <div class="mb-3">
                <label for="size" class="form-label">Size</label>
                <input type="number" class="form-control" id="size" name="size" value="<?php echo $product->getSize()?>">
            </div><div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo $product->getPrice()?>">
            </div>
        <?php endif ?>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>