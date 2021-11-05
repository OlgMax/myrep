<?php
namespace Controller\Admin;
use Models\User as UserModel;
use Controller\Controller;

class User extends Controller
{
    public function Index()
    {
        $userModel = new UserModel();
        $data = $userModel->getUser();
        $this->generate('/admin/user/index', $data);
    }
}

