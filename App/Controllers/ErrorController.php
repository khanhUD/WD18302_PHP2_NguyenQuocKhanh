<?php

namespace App\Controllers;

use App\Controllers\BaseController;


class ErrorController extends BaseController
{
    public function Error($id)
    {
        echo 'Lỗi '.$id;    }

}
