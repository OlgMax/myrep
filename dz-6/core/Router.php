<?php
namespace Core;
class Router
{
    public $var1;
    public $var2;

    public function run($var1, $var2)
    {
        $obj = new self();
        $obj->var1 = $var1;
        $obj->var2 = $var2;
        return var_export($obj);
    }
}

$objRouter = new Router();
$objRouter->run(2,'text1');
