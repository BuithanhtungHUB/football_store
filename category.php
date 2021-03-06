<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controller;

$dbconnect = new \App\Model\DBConnect();
$controller = new Controller\CategoryController();
if (isset($_REQUEST['find'])){
    $controller->search();
}
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;


try {
    switch ($page){
        case 'category-list' :
            $controller->showAllCategory();
            break;
        case 'create-category' :
            $controller->createCategory();
            break;
        case 'delete-category' :
            $controller->deleteCategory();
            break;
        case 'update-category' :
            $controller->updateCategory();
            break;
        default:
            $controller->showAllCategory();
    }
}catch (Exception $exception){
    echo $exception->getMessage();
}
