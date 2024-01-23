<?php

namespace App\Controllers;
use App\Controllers\BaseController;


class HomeController extends BaseController
{
    public function __construct()
    {
        $this->home();
    }
    public function home()
    {
        return $this->view('Admin.Dashboard.test');
    }


}
