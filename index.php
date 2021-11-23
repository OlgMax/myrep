<?php
require_once 'vendor/autoload.php';
use Core\Router;
use Lib\DB\Common\Connector;

$router = new Router();
$router->run();
/*$connector = new Connector();
$conn = $connector->getConnect();*/
