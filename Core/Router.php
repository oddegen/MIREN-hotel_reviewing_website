<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middleware' => null
        ];
        
        return $this;
    }

    public function get($uri, $controller)
    {
        return $this->add('GET', $uri, $controller);
    }

    public function post($uri, $controller)
    {
        return $this->add('POST', $uri, $controller);
    }

    public function delete($uri, $controller)
    {
        return $this->add('DELETE', $uri, $controller);
    }

    public function patch($uri, $controller)
    {
        return $this->add('PATCH', $uri, $controller);
    }

    public function put($uri, $controller)
    {
        return $this->add('PUT', $uri, $controller);
    }

    public function only($key)
    {
        $this->routes[array_key_last($this->routes)]['middleware'] = $key;

        return $this;
    }

    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            $pattern = preg_replace('/\/:([^\/]+)/', '/(?P<$1>[^/]+)', $route['uri']);

            if (preg_match('#^' . $pattern . '$#', $uri, $matches) && $route['method'] === strtoupper($method)) {
                Middleware::resolve($route['middleware']);

                $params = array_filter($matches, 'is_string', ARRAY_FILTER_USE_KEY);
                extract($params);
                return require base_path('app/Http/controllers/' . $route['controller']);
            }
        }

        abort();
    }

    public function previousUrl()
    {
        return $_SERVER['HTTP_REFERER'];
    }
}