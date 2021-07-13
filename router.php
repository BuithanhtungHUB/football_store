<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controller;

$dbconnect = new \App\Model\DBConnect();
$productController = new Controller\ProductController();
$brandController = new Controller\BrandController();
$categoryController = new Controller\CategoryController();
$userController = new Controller\UserController();

$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
try {
    switch ($page){
        case 'product-list':
            $productController->showAllProduct();
            break;
        case 'create-product':
            $productController->createProduct();
            break;
        case 'delete-product':
            $productController->deleteProduct();
            break;
        case 'update-product':
            $productController->updateProduct();
            break;
        case 'brand-list' :
            $brandController->showAllBrand();
            break;
        case 'create-brand' :
            $brandController->createBrand();
            break;
        case 'delete-brand' :
            $brandController->deleteBrand();
            break;
        case 'update-brand' :
            $brandController->updateBrand();
            break;
        case 'category-list' :
            $categoryController->showAllCategory();
            break;
        case 'create-category' :
            $categoryController->createCategory();
            break;
        case 'delete-category' :
            $categoryController->deleteCategory();
            break;
        case 'update-category' :
            $categoryController->updateCategory();
            break;
        case 'logout' :
            $userController->logout();
        default:
            $productController->showAllProduct();
    }
}catch (Exception $exception){
    echo $exception->getMessage();
}
?>
