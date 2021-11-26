<?php
namespace Lib\DB;
use Lib\DB\Common\Bridge;

class Update extends Bridge
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
        if (is_string($this->fieldNames)) {
            $outputSpring = $this->fieldNames;
        } elseif (is_array($this->fieldNames)) {
            $len=count($this->fieldNames);
            foreach ($this->fieldNames as $key => $value) {
                    $outputSpring .= $key . '= "' . $value .'"';
                if( $len > 1) {
                    $outputSpring .=',';
                }
                $len--;
            }
        }
        return $outputSpring;
    }

    public function setTableNames($tableNames): void
    {
        $this->tableNames = $tableNames;
    }
    public function setFieldNames($fieldNames)
    {
        $this->fieldNames = $fieldNames;
    }


    public function getWhereCondition()
    {
        return $this->whereCondition;
    }

    public function setWhereCondition($whereCondition): void
    {
        $this->whereCondition = $whereCondition;
    }

    public function getSqlString()
    {
        if (isset($_POST['update'])) {
            $sql = ' UPDATE ' . $this->getTableNames() . ' SET ' . $this->getFieldNames();
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
        $result = $result->fetchAll(\PDO::FETCH_ASSOC);
        return $result;
    }
}