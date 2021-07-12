<?php


namespace App\Controller;

use App\Model\CategoryModel;

class CategoryController
{
    protected $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new CategoryModel();
    }

    public function showAllCategory()
    {
        $categories = $this->categoryModel->getAll();
        include_once  'app/View/backend/category/list.php';
    }

    public function createCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include_once 'app/View/backend/category/create.php';
        } else {
            $this->uploadImage();
            $this->categoryModel->create($_REQUEST);
            header('location:indexcategory.php');
        }
    }

    public function deleteCategory()
    {
        $id = $_REQUEST['id'];
        $this->categoryModel->delete($id);
        header('location:indexcategory.php');
    }

    public function updateCategory()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $id = $_REQUEST['id'];
            $category = $this->categoryModel->getById($id);
            include_once 'app/View/backend/category/update.php';
        } else {
            if($_REQUEST['fileToUpload'] !== ''){
                $this->uploadImage();
            }
            $this->categoryModel->update($_REQUEST);
            header('location:indexcategory.php');
        }
    }

    public function uploadImage()
    {
        $target_dir = "uploads/category/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is a actual image or fake image
        if (isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if ($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        // Check file size
//        if ($_FILES["fileToUpload"]["size"] > 500000) {
//            echo "Sorry, your file is too large.";
//            $uploadOk = 0;
//        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
}