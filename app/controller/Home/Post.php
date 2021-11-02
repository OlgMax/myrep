<?php
namespace Controller\Home;
use Models\Post as PostModel;
use Controller\Controller;


class Post extends Controller
{
    public function Index()
    {
        $postModel = new PostModel();
        $data = $postModel->getPost();
        $this->generate('/home/post/index', $data);
    }

}