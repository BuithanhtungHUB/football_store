<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controller;

$dbconnect = new \App\Model\DBConnect();
$controller = new Controller\BrandController();
if (isset($_REQUEST['find'])){
    $controller->search();
}
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;


try {
    switch ($page){
        case 'brand-list' :
            $controller->showAllBrand();
            break;
        case 'create-brand' :
            $controller->createBrand();
            break;
        case 'delete-brand' :
            $controller->deleteBrand();
            break;
        case 'update-brand' :
            $controller->updateBrand();
            break;
        default:
            $controller->showAllBrand();
    }
}catch (Exception $exception){
    echo $exception->getMessage();
}
