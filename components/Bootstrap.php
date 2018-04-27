<?php

class Bootstrap
{
    public function __construct($routes)
    {
        $url = $_GET['route'];
        $url = rtrim($url, '/');
        $this->matches($routes, $url);
    }

    public function matches($routes, $url)
    {
        foreach ($routes as $route => $val) {
            $result = $this->replaceSlashes($route);
            if (preg_match("/^$result$/", $url, $find)) {
                return $this->findController($val, $find);
            }
        }
        return $this->findController(false, false);
    }

    public function replaceSlashes($route)
    {
        $route = str_replace("/", '\/', $route);
        return $route;
    }

    public function findController($param, $find)
    {
        if (!$param) {
            $file = 'app/controllers/Error.php';
            if (file_exists($file)) {
                require $file;
                $error = new Error();
            }
        } else {
            $file = 'app/controllers/' . $param[0] . '.php';
            if (file_exists($file)) {
                require $file;
                $controller = new $param[0]($find);
                $method = $controller->$param[1]();
            }
        }

    }
}

?>