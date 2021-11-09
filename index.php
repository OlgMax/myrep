<?php
require_once 'vendor/autoload.php';
use \Core\Router;
use Lib\DB\Connector;
use Lib\DB\Select;
use Lib\DB\Where;

/*$router = new Router();
$router->run();*/
$connector = new Connector();
$conn = $connector->getConnect();

$select = new Select();
$select->setTableNames('contacts');
$select->setLimited(1);
$select->setFieldNames('city');
$sglString = $select->getSqlString();

$where = new Where();
$where->setFieldNames('city');
$where->setOperator('OR');
$where->setParam('Dnepr');
$sglStringW = $where->getSqlWhereString();
$exec = $conn->prepare($sglString.$sglStringW);
$exec->execute;
print_r($exec);



