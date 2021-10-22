<?php
namespace Controller\Admin;
class Index {
    public function index() {
        print_r("Admin index");
    }
    public function view() {
    print_r("Admin view");
    }
}
$obj = new Index();
print_r($obj);