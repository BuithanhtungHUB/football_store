<div class="container">
    <form method="post" enctype="multipart/form-data">
        <h3>CREATE CATEGORY</h3>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" required class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="fileToUpload">
        </div>
        <div class="mb-3">
            <label for="detail" class="form-label">Detail</label>
            <input type="text" required class="form-control" id="detail" name="detail">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
