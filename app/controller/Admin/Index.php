<?php
namespace Controller\Admin;
use Controller\Controller;

class Index extends Controller {
    public function index() {
        print_r("Admin index");
        $this->generate('/admin/admin/index');
    }
    public function view() {
    print_r("Admin view");
    }

}

$obj = new Index();
print_r($obj);