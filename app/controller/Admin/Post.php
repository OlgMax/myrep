<?php
namespace Controller\Admin;
use Models\Post as PostModel;
use Controller\Controller;
use Helper\GlobalFilters;

class Post extends Controller
{
    public function Index()
    {
        $postModel = new PostModel();
        $this->generate('/admin/post/index', $postModel->getPosts(GlobalFilters::postFilter()));
    }
}




