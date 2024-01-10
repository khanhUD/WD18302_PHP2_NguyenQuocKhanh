<?php
require './src/Core/Database.php';
require_once "./vendor/autoload.php";
use App\Core\Database ;
use App\Controller\BaseController;
use App\Model\BaseModel;
use App\Core\Route;


$db = new Database();

$demoController = new BaseController();
$result = $demoController->demo();
echo $result; 

$demoModel = new BaseModel();
$result = $demoModel->demo();
echo $result; 


$route = new Route();
$result = $route->demo();
echo $result; 

