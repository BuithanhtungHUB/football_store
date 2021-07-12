<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controller;

$dbconnect = new \App\Model\DBConnect();
$controller = new Controller\ProductController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
include_once 'app/View/backend/layout/header.php';
try {
    switch ($page){
        case 'product-list':
            $controller->showAllProduct();
            break;
        case 'create-product':
            $controller->createProduct();
            break;
        case 'delete-product':
            $controller->deleteProduct();
            break;
        case 'update-product':
            $controller->updateProduct();
            break;
        default:
            $controller->showAllProduct();
    }
}catch (Exception $exception){
    echo $exception->getMessage();
}
include_once 'app\View\backend\layout\footer.php';