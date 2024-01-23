<?php

namespace App\Controllers;


class BaseController
{
    const VIEW_FOLDER_NAME = 'Views';
    public $khanh = __DIR__;

    public function view($viewPath, array $data = [])
    {
        $viewPath = __DIR__ . '/../' . self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewPath) . '.php';

        // $viewPath = self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewPath) . '.php';
        return include($viewPath);
    }
}
