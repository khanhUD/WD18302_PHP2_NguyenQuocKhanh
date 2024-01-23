<?php

$appConfig = require_once __DIR__ . '/config/app.php';

define('WEB_ROOT', $appConfig['ROOT_URL']);

require_once "vendor\autoload.php";

define ("ROOT_URL", "localhost:300");

use App\Core\Route;

new Route;

