<?php
namespace Models;

class User
{
    public $someUser =  [
        'people' => [
            ['name' => 'Jon', 'age' => 10, 'city' => 'NY'],
            ['name' => 'Bob', 'age' => 20, 'city' => 'Kiev'],
            ['name' => 'Lily', 'age' => 55, 'city' => 'Dnepr'],
        ],
    ];

    public function getUser()
    {
        return $this->someUser;
    }
}
