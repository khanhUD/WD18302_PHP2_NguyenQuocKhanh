<?php

$appConfig = require_once __DIR__ . '/config/app.php';

define('WEB_ROOT', $appConfig['ROOT_URL']);

require_once "vendor\autoload.php";
session_start();

define("ROOT_URL", "localhost:300");

use App\Core\Route as Router;

$router = new Router();
$router

    ->register('/dang-nhap', [App\Controllers\LoginController::class, 'index'])
    ->register('/dang-xuat', [App\Controllers\LoginController::class, 'logOut'])
    ->register('/dang-nhap/xu-ly', [App\Controllers\LoginController::class, 'handleLogin'])
    ->register('/dang-ky', [App\Controllers\RegisterController::class, 'index'])
    ->register('/dang-ky/xu-ly', [App\Controllers\RegisterController::class, 'handleRegiter'])
    ->register('/quen-mat-khau', [App\Controllers\LoginController::class, 'forgotPassword'])
    ->register('/quen-mat-khau/xu-ly', [App\Controllers\LoginController::class, 'handleForgotPassword'])
    // tai khoan
    ->register('/', [App\Controllers\HomeController::class, 'index'])
    ->register('/tai-khoan', [App\Controllers\AccountsController::class, 'index'])
    ->register('/tai-khoan/cho-duyet', [App\Controllers\AccountsController::class, 'Browser'])
    ->register('/tai-khoan/them', [App\Controllers\AccountsController::class, 'create'])
    ->register('/tai-khoan/them-xu-ly', [App\Controllers\AccountsController::class, 'store'])
    ->register('/tai-khoan/chi-tiet/{id}', [App\Controllers\AccountsController::class, 'show'])
    ->register('/tai-khoan/sua/{id}', [App\Controllers\AccountsController::class, 'edit'])
    ->register('/tai-khoan/sua-xu-ly', [App\Controllers\AccountsController::class, 'update'])
    ->register('/tai-khoan/duyet-xu-ly', [App\Controllers\AccountsController::class, 'updateStatus'])
    ->register('/tai-khoan/xoa', [App\Controllers\AccountsController::class, 'destroy'])
    ->register('/du-an', [App\Controllers\ProjectController::class, 'index'])
    ->register('/du-an/cho-duyet', [App\Controllers\ProjectController::class, 'Browser'])
    ->register('/du-an/them', [App\Controllers\ProjectController::class, 'index'])
    ->register('/du-an/them-xu-ly', [App\Controllers\ProjectController::class, 'store'])
    ->register('/du-an/chi-tiet/{id}', [App\Controllers\ProjectController::class, 'show'])
    ->register('/du-an/xoa', [App\Controllers\ProjectController::class, 'destroy'])
    ->register('/du-an/sua/{id}', [App\Controllers\ProjectController::class, 'edit'])
    ->register('/du-an/sua-xu-ly', [App\Controllers\ProjectController::class, 'update'])
    ->register('/du-an/duyet-xu-ly', [App\Controllers\ProjectController::class, 'updateStatus'])
    ->register('/chuc-vu', [App\Controllers\RolesController::class, 'index'])
    ->register('/chuc-vu/them', [App\Controllers\RolesController::class, 'create'])
    ->register('/chuc-vu/chi-tiet/{id}', [App\Controllers\RolesController::class, 'show'])
    ->register('/chuc-vu/sua/{id}', [App\Controllers\RolesController::class, 'edit'])
    ->register('/nhiem-vu', [App\Controllers\TasksController::class, 'index'])
    ->register('/nhiem-vu/them', [App\Controllers\TasksController::class, 'index'])
    ->register('/nhiem-vu/them-xu-ly', [App\Controllers\TasksController::class, 'store'])
    ->register('/nhiem-vu/chi-tiet/{id}', [App\Controllers\TasksController::class, 'show'])
    ->register('/nhiem-vu/sua/{id}', [App\Controllers\TasksController::class, 'edit'])
    ->register('/nhiem-vu/sua-xu-ly', [App\Controllers\TasksController::class, 'update'])
    ->register('/nhiem-vu/xoa', [App\Controllers\TasksController::class, 'destroy'])
    ->register('/phan-cong', [App\Controllers\ProjectparticipationController::class, 'index'])
    ->register('/phan-cong/them', [App\Controllers\ProjectparticipationController::class, 'index'])
    ->register('/phan-cong/them-xu-ly', [App\Controllers\ProjectparticipationController::class, 'store'])
    ->register('/phan-cong/chi-tiet/{id}', [App\Controllers\ProjectparticipationController::class, 'show'])
    ->register('/phan-cong/sua/{id}', [App\Controllers\ProjectparticipationController::class, 'edit'])
    ->register('/phan-cong/sua-xu-ly', [App\Controllers\ProjectparticipationController::class, 'update'])
    ->register('/phan-cong/xoa', [App\Controllers\ProjectparticipationController::class, 'destroy']);


try {
    echo $router->resolve($_SERVER['REQUEST_URI']);
} catch (\Exception $e) {
    echo $e->getCode();
    echo $e->getMessage();
}
