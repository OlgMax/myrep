<?php
namespace Lib\DB;
class Where
{
    protected $conditions;
    protected $whereString;

    public function __construct($conditions)
    {
        $this->conditions = $conditions;
        $this->buildWhereString();
    }
    public function getWhereString()
    {
        return $this->whereString;
    }

    private function buildWhereString()
    {
        if (is_string($this->conditions)) {
            $this->whereString = $this->conditions;
        } elseif (is_array($this->conditions)) {
            foreach ($this->conditions as $key => $value) {
                if (is_string($key)) {
                    if (!empty($this->whereString)) {
                        $this->whereString .= ' AND ';

                    }
                    $this->whereString .= $key . ' = ' . '"' . $value . '"';
                } else {
                    $temp = '';
                    for ($i = 0; $i < 4; $i++) {
                        if ($i != 3) {
                            $temp .= $value[$i];
                        } else {
                            if (!empty($this->whereString)) {
                                if (isset($value[$i])) {
                                    $temp = ' ' . $value[$i] . ' ' . $temp;
                                } else {
                                    $temp = ' AND ' . $temp;
                                }
                            }
                        }
                    }
                }
                if (is_array($value)) {
                    if ($key = 'like') {
                        foreach ($value as $item => $param) {
                            if (is_string($item)) {
                                $this->whereString .= $item . ' LIKE ' . '"' . $param . '"';
                            }
                        }
                    }
                 }
            }
            return $this->whereString;
        }
    }

    public function setConditions($conditions): void
    {
        $this->conditions = $conditions;
    }

    public function setWhereString($whereString): void
    {
        $this->whereString = $whereString;
    }
    public function getSqlWhereString()
    {
        if(is_string($this->conditions)) {
            $sql=' WHERE '. $this->conditions;
        } else {
        $sql=' WHERE '.$this->whereString;
    }
        return $sql;
    }
}



