<?php
namespace Controller\Home;
use Controller\Controller;

class Contacts extends Controller
{
    public function index()
    {
        $this->generate('/home/contacts/index');
    }
}
$obj = new Contacts();
print_r($obj);




