<?php
namespace Lib\DB\Common;
use PDO;
class Connector
{
    protected $connect;
    public function __construct()
    {
        $config = include 'app/config/database.php';
        $dns = $config['driver'].':dbname='.$config['db_name'] .';port='.$config['port'].';host='.$config['host'];
        $this->connect = new PDO($dns, $config['user'], $config['pass']);
    }
    public function getConnect()
    {
        return $this->connect;
    }
}