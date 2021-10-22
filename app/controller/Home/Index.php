<?php
namespace Controller\Home;
class Index {
    public function index() {
       print_r("Home index");
    }
    public function view() {
        print_r("Home view");
    }
}
$obj = new Index();
print_r($obj);