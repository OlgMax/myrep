<?php
namespace Controller\Admin;

use Controller\Controller;

class Main extends Controller {
    public function index() {
        print_r(" Admin Main Page");
        $this->generate('/admin/admin/index');
    }
}
$obj = new Main();
print_r($obj);
