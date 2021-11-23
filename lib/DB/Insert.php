<?php
namespace Lib\DB;
use Lib\DB\Common\Bridge;
class Insert extends Bridge
{
    private $tableNames;
    private $fieldNames;
    public $values;

    public function getTableNames()
    {
        return $this->tableNames;
    }

    public function getFieldNames(): string
    {
        if (is_string($this->fieldNames)) {
            $outputSpring = $this->fieldNames;
        } elseif (is_array($this->fieldNames)) {
            foreach ($this->fieldNames as $value) {
                $outputSpring .= $value;
            }
        }
        return $outputSpring;
    }

    public function getValues()
    {
        return $this->values;
    }

    public function setTableNames($tableNames): void
    {
        $this->tableNames = $tableNames;
    }
    public function setFieldNames(string $fieldNames): void
    {
        $this->fieldNames = $fieldNames;
    }

    public function setValues($values): void
    {
        $this->values = $values;
    }

    public function getSqlString()
    {
        if (isset($_POST['create'])) {
            $sql=' INSERT INTO '.$this->getTableNames().' ('.$this->getFieldNames().') VALUES ('.$this->getValues().')';
            return $sql;
        }
    }
    public function execute()
    {
        $result = $this->fromDB();
        var_dump($result);
        $result = $result->fetchAll(\PDO::FETCH_ASSOC);
        var_dump($result);
        return $result;
    }
}