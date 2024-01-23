<?php

namespace App\Controllers;
use App\Controllers\BaseController;


class LoginController extends BaseController
{

    public function index()
    {
        return $this->view('Login.login');
    }

}
