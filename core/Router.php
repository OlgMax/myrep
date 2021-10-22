<?php
namespace Core;

use Controller\Errors\Error404;
use Controller\Admin;
use Controller\Home;


class Router
{
    protected $dir;
    protected $controller;
    protected $method;

    public function __construct()
    {
        $this->init();
    }

    public function run()
    {
         $nameSpace = [
             'admin' => 'Controller\Admin\\' . ucfirst($this->controller),
             'home' => 'Controller\Home\\' . ucfirst($this->controller)
         ];

        foreach ($nameSpace as $key => $classNameSpace) {
            $dir = $this->dir;
            if ($key==$dir) {
                if (class_exists($classNameSpace)) {
                    $clsObj = new $classNameSpace;
                    $method = $this->method;
                    $dir = $this->dir;
                    if (method_exists($clsObj, $method)) {
                        return $clsObj->$method();
                    }
                }
                else {
                    $objErr = new Error404();
                    $objErr->index();
                }
            }
        }
    }

    public function init()
    {
        $path = [];
        if (!empty($_SERVER['REDIRECT_URL'])) {
            $path = explode('/', $_SERVER['REDIRECT_URL']);
        }
        $this->dir = (!empty($path[1])) ? $path[1] : 'index';
        $this->controller = (!empty($path[2])) ? $path[2] : 'index';
        $this->method = (!empty($path[3])) ? $path[3] : 'index';
    }
}