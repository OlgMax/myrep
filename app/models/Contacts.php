<?php
namespace Models;

use Models\Common\Model;

class Contacts extends Model
{
    public function getContacts(array $filters = [])
    {
        $select = $this->select();
        $select->setTableNames('contacts');
        $select->setWhereCondition("id = 2");
        $select->execute();
        return[];

    }
}