<?php
namespace Controller\Admin;
use Models\Post as PostModel;
use Controller\Controller;

class Post extends Controller
{
    public function Index()
    {
        $postModel = new PostModel();
        $data = $postModel->getPost();
        $this->generate('/admin/post/index', $data);
    }

}


