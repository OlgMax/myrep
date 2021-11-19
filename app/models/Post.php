<?php
namespace Models;

use Models\Common\Model;

class Post extends Model
{
    public $somePost =  [
        'people' => [
            ['name' => 'Jon', 'age' => 10, 'city' => 'NY'],
            ['name' => 'Bob', 'age' => 20, 'city' => 'Kiev'],
            ['name' => 'Lily', 'age' => 55, 'city' => 'Dnepr'],
        ],
    ];
    public function getSomePost()
    {
        return $this->somePost;
    }
    public function getPosts(array $filters = [])
    {
        $select = $this->select();
        $select->setTableNames('posts');
        $select->setWhereCondition([ 'id' => 2, 'subject' => 'some subject']);
        $select->execute();
        return[];

    }
}