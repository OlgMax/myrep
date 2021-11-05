<?php
namespace Controller\Home;
use Controller\Controller;

class About extends Controller
{
    public function index()
    {
        $this->generate('/home/about/index');
    }
}
$obj = new About();
print_r($obj);

