<?php

namespace Lib\DB;

use Lib\DB\Common\Bridge;
class Delete extends Bridge

{
    private $tableNames;
    private $fieldNames = '*';
    public $whereCondition;


    public function getTableNames()
    {
        return $this->tableNames;
    }

    public function getFieldNames(): string
    {
        return $this->fieldNames;
    }

    public function getWhereCondition()
    {
        return $this->whereCondition;
    }

    public function setTableNames($tableNames): void
    {
        $this->tableNames = $tableNames;
    }

    public function setFieldNames(string $fieldNames): void
    {
        $this->fieldNames = $fieldNames;
    }

    public function setWhereCondition($whereCondition): void
    {
        $this->whereCondition = $whereCondition;
    }
    public function getSqlString()
    {
        if (isset($_POST['delete'])) {
            $sql = ' DELETE FROM ' . $this->getTableNames();
        }

        if (!empty($this->whereCondition)) {
            $where = new Where($this->whereCondition);
            $sql .= $where->getSqlWhereString();
        }
            return $sql;
    }
    public function execute()
    {
        $result = $this->fromDB();
        var_dump($result);
        $result = $result->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}