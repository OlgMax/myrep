<?php
namespace Models;
use Models\Common\Model;

class User extends Model
{
    public $someUser =  [
        'people' => [
            ['name' => 'Jon', 'age' => 10, 'city' => 'NY'],
            ['name' => 'Bob', 'age' => 20, 'city' => 'Kiev'],
            ['name' => 'Lily', 'age' => 55, 'city' => 'Dnepr'],
        ],
    ];

    public function getSomeUser()
    {
        return $this->someUser;
    }
    public function getUsers(array $filters = [])
    {
        $select = $this->select();
        $select->setTableNames('users');
        $select->setWhereCondition(['like', ['user_name' => 'Bob']]);
        $select->execute();
        return[];

    }
}
