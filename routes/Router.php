<?php

class Router
{
    private $routes = [];

    public function add($path_key, $callback_value)
    {
        $this->routes[$path_key] = $callback_value;
    }

    public function handle($request)
    {
        $request = rtrim($request, "/");

        if (isset($this->routes[$request])) {
            call_user_func($this->routes[$request]);
        } else {
            http_response_code(404);
            echo "404 - Page Not Found";
        }
    }
}
