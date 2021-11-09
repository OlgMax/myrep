<?php
namespace Lib\DB;

class Select
{
    private $tableNames;
    private $fieldNames = '*';
    private $ordered;
    private $orderedType;
    private $limited;
    private $offset = 0;

    private function buildOutputSpring($stringToBuild, $order=false)
    {
        $outputSpring = '';
        if (is_string($stringToBuild)) {
            $outputSpring = $stringToBuild;
        } elseif (is_array($stringToBuild)) {
            foreach ($stringToBuild as $key => $value) {
                if (!empty($outputSpring)) {
                    $outputSpring .= ',';
                }
                if (is_int($key)) {
                    $outputSpring .= $value;
                } else {
                    if(!$order) {
                        $outputSpring .= $value . 'AS' . $key;
                    } else {
                        $outputSpring .= $key . ' ' . $value;
                    }

                }
            }
        }
        return $outputSpring;
    }
    private function getTableNames()
    {
        return $this->buildOutputSpring($this->tableNames);
    }

    private function getFieldNames(): string
    {
        return $this->buildOutputSpring($this->fieldNames);
    }

    private function getOrdered()
    {
        return $this->buildOutputSpring($this->ordered, true);
    }

    private function getOrderedType()
    {
            return $this->orderedType;
    }

    private function getLimited()
    {
        return $this->limited;
    }

    private function getOffset()
    {
        return $this->offset;
    }

    public function setTableNames($tableNames): void
    {
        $this->tableNames = $tableNames;
    }

    public function setFieldNames($fieldNames): void
    {
        $this->fieldNames = $fieldNames;
    }

    public function setOrdered(string$ordered): void
    {
        $this->ordered = $ordered;
    }

    public function setOrderedType(string $orderedType): void
    {
        $this->orderedType = $orderedType;
    }

    public function setLimited(int $limited): void
    {
        $this->limited = $limited;
    }

    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    public function getSqlString()
    {
        $sql='SELECT '.$this->getFieldNames().' FROM '.$this->getTableNames();
        if (!empty($this->ordered)) {
            $sql .= ' ORDER BY ' . $this->getOrdered();
        }
        if (!empty($this->limited)) {
            $sql .= ' LIMIT ' . $this->getLimited();
            if (!empty($this->offset)) {
                $sql .= ', ' . $this->getOffset();
            }
        }
        return $sql;
    }

}
