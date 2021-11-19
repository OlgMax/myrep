<?php

namespace Models\Common;
use Lib\DB\Common\SQL;
class Model
{
    protected $sql;
    public function __construct()
    {
        $this->sql = new SQL();
    }
    public function select()
    {
        return $this->sql->select();
    }

}
