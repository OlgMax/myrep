<?php
namespace Controller\Home;

use Controller\Controller;

class Main extends Controller {
    public function index() {
        print_r("Home Main Page");
        $this->generate('/home/home/index');
    }
}
$obj = new Main();
print_r($obj);
