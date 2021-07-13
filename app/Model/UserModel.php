<?php


namespace App\Model;

use PDO;

class UserModel
{
    private $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function login($request)
    {
        $sql = "SELECT * FROM `users` WHERE `email`=? AND `password`=?";
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->bindParam(1, $request['email']);
        $stmt->bindParam(2, $request['password']);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}