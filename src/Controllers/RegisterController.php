<?php

namespace App\Controllers;
use App\Controllers\BaseController;


class RegisterController extends BaseController
{

    public function index()
    {
        // echo 'đây là đăng ký';
        return $this->view('Login.register');
    }

}
