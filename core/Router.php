<?php
namespace Core;

use Controller\Main;
use Controller\Errors\Error404;
use Controller\Admin\Index;
use Controller\Home;

class Router
{
    protected $dir;
    protected $controller;
    protected $method;

    public function __construct()
    {
        $this->init();
        $routesPath = $_SERVER['DOCUMENT_ROOT'].'/app/config/config.php';
        $this->routes = include_once $routesPath;
    }
    private function error() {
        $objErr = new Error404();
        $objErr->index();
    }
    public function run()
    {
        foreach ($this->routes as $key => $classNameSpace) {
            $dir = $this->dir;
            if ($key==$dir) {
                if (class_exists($classNameSpace)) {
                    $clsObj = new $classNameSpace;
                    $method = $this->method;
                    if (method_exists($clsObj, $method)) {
                        return $clsObj->$method();
                    }
                    else {
                        $this->error();
                    }
                }
                else {
                    $this->error();
                }
            }

        }
    }

    public function init() {
        $path = [];
        if (!empty($_SERVER['REDIRECT_URL'])) {
            $path = explode('/', $_SERVER['REDIRECT_URL']);
        }
        $this->dir = (!empty($path[1])) ? $path[1] : 'index';
        $this->controller = (!empty($path[2])) ? $path[2] : 'index';
        $this->method = (!empty($path[3])) ? $path[3] : 'index';
    }
}