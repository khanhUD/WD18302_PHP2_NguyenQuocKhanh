<?php

namespace App\Controllers;

use App\Core\Response;
// use App\Core\Render;


class BaseController
{
    
    const VIEW_FOLDER_NAME = 'Views';
    const MODEL_FOLDER_NAME = 'Views';

    public function view($viewPath, array $data = [])
    {
        $viewPath = __DIR__ . '/../' . self::VIEW_FOLDER_NAME . '/' . str_replace('.', '/', $viewPath) . '.php';
        extract($data);
        return include($viewPath);

    }
    public function model($model)
    {
        // check file ton tai
        if (file_exists(__DIR__ . '/../' . self::MODEL_FOLDER_NAME . '/' . $model . '.php')) {
            require_once __DIR__ . '/../' . self::MODEL_FOLDER_NAME . '/' . $model . '.php';
            // check class ton tai
            if (class_exists($model)) {
                $model = new $model();
                return $model;
            }
        }
        return false;
    }

    public function  redirect($url, $refresh = null): void
    {
        header('location:' . $url);
    }

    public function renderModel($file)
    {
        require 'App/Models/' . $file . '.php';
        return new $file();
    }
}
