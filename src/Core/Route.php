<?php

namespace App\Core;

class Route
{
    protected array $routes = [];
    public function register( $route, $action)
    {
        $this->routes[$route] = $action;
        return $this;
    }

    public function resolve(string $requestUrl)
    {

        $route = $requestUrl;
        $action = $this->routes[$route] ?? null;
        if (!$action) {
            throw new \App\Core\exception\NotFoundException();
            die();
        }

        if (is_callable($action)) {
            return call_user_func($action);
        }

        if (is_array($action)) {
            [$class, $method] = $action;

            if (class_exists($class)) {
                $classInstance = new $class();

                if (method_exists($classInstance, $method)) {
                    return call_user_func_array([$classInstance, $method], []);
                }
            }
        }
    }
}
