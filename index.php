<?php
require_once 'vendor/autoload.php';
use Core\Router;
use Lib\DB\Common\Connector;
use Lib\DB\Select;
use Lib\DB\Where;


$router = new Router();
$router->run();
$connector = new Connector();
$conn = $connector->getConnect();
