<?php
namespace Controller\Home;

use Controller\Controller;

class Index extends Controller
{
    public function index()
    {
        print_r("home index");
        $this->generate('/home/home/index');
    }
    public function view()
    {
        print_r("home view");
    }

}

$obj = new Index();
print_r($obj);