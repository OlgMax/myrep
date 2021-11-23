<?php
namespace Controller\Home;
use Models\Post as PostModel;
use Controller\Controller;
use Helper\GlobalFilters;

class Post extends Controller
{   protected $postModel;
    public function __construct() {
        $this->postModel = new PostModel();
    }
    public function Index()
    {
        $this->generate('/home/post/index', $this->postModel->getPosts(GlobalFilters::postFilter()));
    }
    public function Create()
    {
        $this->generate('/home/post/create', $this->postModel->createPost(GlobalFilters::postFilter()));
    }
    public function Update()
    {
        $this->generate('/home/post/update', $this->postModel->updatePost(GlobalFilters::postFilter()));
    }
    public function Delete()
    {
        $this->generate('/home/post/delete', $this->postModel->deletePost());

    }
}