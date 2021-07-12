<?php


namespace App\Model;


class BrandModel
{
    private $dbConnect;


    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAll()
    {
        try {
            $sql = "SELECT * FROM `brands`;";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }

    }

    public function convertToObject($data)
    {
        $brand = new Brand($data['name'], $data['detail']);
        $brand->setId($data['id']);
        if ($data['url_image'] == null) {
            $brand->setUrlImage('uploads/default/default-image.png');
        } else {
            $brand->setUrlImage($data['url_image']);
        }
        return $brand;
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
            $sql = "SELECT * FROM `brands` WHERE  `id` = $id ";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertToObject($stmt->fetch());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function create($request)
    {
        $url = 'uploads/brand/' . $_FILES['fileToUpload']['name'];
        try {
            $sql = "INSERT INTO `brands`(`name`,`url_image`,`detail`) VALUES (?,?,?)";
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
        $brand = $this->getById($_REQUEST['id']);
        if ($_FILES['fileToUpload']['name'] == '') {
            $url = $brand->getUrlImage();
        } else {
            $url = 'uploads/brand/' . $_FILES['fileToUpload']['name'];
        }

        try {
            $sql = "UPDATE `brands` SET `name`=?,`url_image`=?,`detail`=? WHERE `id`=" . $request['id'];
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
        $sql = "DELETE FROM `brands` WHERE `id` = $id";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }
}