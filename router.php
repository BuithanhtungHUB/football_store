<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controller;

$dbconnect = new \App\Model\DBConnect();
$productController = new Controller\ProductController();
$userController = new Controller\UserController();
if (isset($_REQUEST['find'])){
    $productController->search();
}
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
        case 'logout' :
            $userController->logout();
        default:
            $productController->showAllProduct();
    }
}catch (Exception $exception){
    echo $exception->getMessage();
}
?>
