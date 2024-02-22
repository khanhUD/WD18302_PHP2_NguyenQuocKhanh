<?php

namespace App\Core;

class Route
{
    protected array $routes = [];

    public function register(string $route, $action)
    {
        $this->routes[$route] = $action;
        return $this;
    }

    public function resolve(string $requestUrl)
    {
        $action = null;

        foreach ($this->routes as $routePattern => $routeAction) {
            // Biểu thức chính quy để so khớp URL với mẫu route
            $pattern = preg_replace('/\//', '\/', $routePattern);
            $pattern = '/^' . preg_replace('/\{([a-z]+)\}/', '([^\/]+)', $pattern) . '$/';

            if (preg_match($pattern, $requestUrl, $param)) {
                array_shift($param); // Loại bỏ phần tử đầu tiên, là URL đầy đủ
                $action = $routeAction;
                break;
            }
        }

        if (!$action) {
            throw new \App\Core\exception\NotFoundException();
            die();
        }

        if (is_callable($action)) {
            return call_user_func_array($action, $param);
        }

        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $classInstance = new $class();

                if (method_exists($classInstance, $method)) {
                    return call_user_func_array([$classInstance, $method], $param);
                }
            }
        }
    }
}
