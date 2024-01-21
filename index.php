<?php
require './src/Core/Database.php';
require_once "./vendor/autoload.php";

use App\Core\Database;
use App\Core\Field;
use App\Core\Form;

// // $db = new Database();

// // Bắt đầu biểu mẫu
// echo Form::begin('#', 'post');
// // Thêm các trường vào biểu mẫu
// echo Form::field('firstname');
// echo Form::field('lastname');
// echo Form::field('email');
// echo Form::field('passsword')->passwordField();
// echo Form::field('confirmPassword')->passwordField();

// // ... thêm nhiều trường khác

// // Kết thúc biểu mẫu
// echo Form::end();

use App\Core\Route as Router;

$router = new Router();
$router
    ->register('/', [App\Controller\HomeController::class, 'index'])
    ->register('/project', [App\Controller\ProjectController::class, 'index'])
    ->register('/project/create', [App\Controller\ProjectController::class, 'create']);
echo 'hello';