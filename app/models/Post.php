<?php
namespace Models;

class Post
{
    public $somePost =  [
        'articles' => [
            ['id' => '1', 'title' => 'Metallica', 'author' => 'Hetfield', 'description' => 'Metallica is the best'],
            ['id' => '2', 'title' => 'Manowar', 'author' => 'Adams', 'description' => 'Manowar is the best'],
            ['id' => '3', 'title' => 'Rammstein', 'author' => 'Lindemann', 'description' => 'Rammstein is the best'],
        ],
    ];
    public function getPost()
    {
        return $this->somePost;
    }
}