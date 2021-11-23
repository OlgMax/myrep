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
    public function insert()
    {
        return $this->sql->insert();
    }
    public function delete()
    {
        return $this->sql->delete();
    }
    public function update()
    {
        return $this->sql->update();
    }

}
