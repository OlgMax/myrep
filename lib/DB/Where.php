<?php
namespace Lib\DB;
class Where
{
    public $fieldNames = '*';
    public $operator;
    public $param;

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

    public function getOperator()
    {
        return $this->operator;
    }

    public function getParam()
    {
        return $this->param;
    }

    public function setFieldNames(string $fieldNames): void
    {
        $this->fieldNames = $fieldNames;
    }

    public function setOperator($operator): void
    {
        $this->operator = $operator;
    }

    public function setParam($param): void
    {
        $this->param = $param;
    }

    public function getSqlWhereString()
    {
        $sql=' WHERE '.$this->getFieldNames().' = "'.$this->param.'" ';
        if (!empty($this->operator)) {
            $sql .= $this->getOperator().' '.$this->getFieldNames().' = "'.$this->param.'" ';
        }
        return $sql;
    }
}

