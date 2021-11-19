<?php
namespace Controller\Admin;
use Models\User as UserModel;
use Controller\Controller;
use Helper\GlobalFilters;

class User extends Controller
{
    public function Index()
    {
        $userModel = new UserModel();
        $this->generate('/admin/user/index', $userModel->getUsers(GlobalFilters::postFilter()));
    }
}

