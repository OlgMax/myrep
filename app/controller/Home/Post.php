<?php
namespace Controller\Home;
use Models\Post as PostModel;
use Controller\Controller;
use Helper\GlobalFilters;

class Post extends Controller
{
    public function Index()
    {
        $postModel = new PostModel();
        $this->generate('/home/post/index', $postModel->getPosts(GlobalFilters::postFilter()));
    }

}