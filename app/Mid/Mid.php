<?php


namespace App\Mid;


class Mid
{
    public function __construct()
    {
    }

    public function isLogin()
    {
        if (isset($_SESSION['userLogin'])){
            header('Location:login.php');
        }
    }
}