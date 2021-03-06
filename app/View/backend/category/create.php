<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Category</title>

    <!-- Custom fonts for this template-->
    <link href="app/View/frontend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="app/View/frontend/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-info">
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create a Brand</h1>
                        </div>
                        <form class="user" method="post" enctype="multipart/form-data">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" required class="form-control" id="name" name="name">
                                </div>
                                <div class="col-sm-6">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" class="form-control" id="image" name="fileToUpload">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="detail" class="form-label">Detail</label>
                                <input type="text" required class="form-control" id="detail" name="detail">
                            </div>
                            <button type="submit" class="btn btn-info">Submit</button>
                            <button type="submit" class="btn btn-success"><a style="color:white" href="category.php">CANCEL</a> </button>
                            <hr>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Bootstrap core JavaScript-->
<script src="app/View/frontend/vendor/jquery/jquery.min.js"></script>
<script src="app/View/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="app/View/frontend/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="app/View/frontend/js/sb-admin-2.min.js"></script>

</body>

</html>

