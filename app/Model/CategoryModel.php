<?php


namespace App\Model;


class CategoryModel
{
    private $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM `categories`;";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        }catch (\PDOException $exception){
            die($exception->getMessage());
        }
    }

    public function convertToObject($data)
    {
        $category = new Category($data['name'], $data['detail']);
        $category->setId($data['id']);
        if ($data['url_image'] == null) {
            $category->setUrlImage('uploads/default/default-image.png');
        } else {
            $category->setUrlImage($data['url_image']);
        }
        return $category;
    }

    public function convertAllToObj($data)
    {
        $objs = [];
        foreach ($data as $item) {
            $objs[] = $this->convertToObject($item);
        }
        return $objs;
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT * FROM `categories` WHERE  `id` = $id ";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertToObject($stmt->fetch());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function create($request)
    {
        $url = 'uploads/category/' . $_FILES['fileToUpload']['name'];
        try {
            $sql = "INSERT INTO `categories`(`name`,`url_image`,`detail`) VALUES (?,?,?)";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $url);
            $stmt->bindParam(3, $request['detail']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function update($request)
    {
        $category = $this->getById($_REQUEST['id']);
        if ($_FILES['fileToUpload']['name'] == '') {
            $url = $category->getUrlImage();
        } else {
            $url = 'uploads/category/' . $_FILES['fileToUpload']['name'];
        }

        try {
            $sql = "UPDATE `categories` SET `name`=?,`url_image`=?,`detail`=? WHERE `id`=" . $request['id'];
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $url);
            $stmt->bindParam(3, $request['detail']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function delete($id)
    {
        $sql = "DELETE FROM `categories` WHERE `id` = $id";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }
}
