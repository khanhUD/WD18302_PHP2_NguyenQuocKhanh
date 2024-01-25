<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController {
    public function index(){
        // return $this->view('Admin.Dashboard.test');
        echo 'đây là trang chủ';
    }

}