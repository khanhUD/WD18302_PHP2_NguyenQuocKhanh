<?php
namespace App\Controllers;

use App\Controllers\BaseController;

class HomeController extends BaseController {
    public function index(){
        if (empty($_SESSION['users'])){
            return $this->view('Login.Login');
        }
        return $this->view('Admin.Dashboard.test');
    }

}