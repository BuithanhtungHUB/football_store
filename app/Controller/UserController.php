<?php


namespace App\Controller;

use App\Model\UserModel;

class UserController
{
    public $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function loginUser()
    {
        $user = $this->userModel->login($_REQUEST);
        if ($user) {
            session_start();
            $_SESSION['userLogin'] = $user;
            header('location:index.php');
        }
        return false;
    }

    public function logout()
    {
        if (isset($_SESSION['userLogin'])){
            session_destroy();
            header('location:index.php');
        }
    }
}