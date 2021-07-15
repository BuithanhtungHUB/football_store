<?php


namespace App\Model;


class ProductModel
{
    private $dbConnect;


    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAll()
    {
        try {
//            $sql = "SELECT * FROM `products`";
            $sql = "SELECT products.id, products.name, products.url_image, products.sku, products.detail,
                    categories.name AS category_id, brands.name AS brand_id, products.size, products.price 
                    FROM `products` INNER JOIN categories ON products.category_id = categories.id 
                            INNER JOIN brands ON products.brand_id = brands.id";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }

    }

    public function convertToObject($data)
    {
        $product = new Product($data['name'], $data['sku'], $data['detail'], $data['category_id'], $data['brand_id'], $data['size'], $data['price']);
        $product->setId($data['id']);
        if ($data['url_image'] == null) {
            $product->setUrlImage('uploads/default/default-image.png');
        } else {
            $product->setUrlImage($data['url_image']);
        }
        return $product;
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
            $sql = "SELECT * FROM `products` WHERE  `id` = $id ";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertToObject($stmt->fetch());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }

    public function create($request)
    {
        $url = 'uploads/product/' . $_FILES['fileToUpload']['name'];
        try {
            $sql = "INSERT INTO `products`(`name`,`url_image`,`sku`,`detail`,`category_id`,`brand_id`,`size`,`price`) VALUES (?,?,?,?,?,?,?,?)";
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $url);
            $stmt->bindParam(3, $request['sku']);
            $stmt->bindParam(4, $request['detail']);
            $stmt->bindParam(5, $request['category_id']);
            $stmt->bindParam(6, $request['brand_id']);
            $stmt->bindParam(7, $request['size']);
            $stmt->bindParam(8, $request['price']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function update($request)
    {
        $product = $this->getById($_REQUEST['id']);
        if ($_FILES['fileToUpload']['name'] == '') {
            $url = $product->getUrlImage();
        } else {
            $url = 'uploads/product/' . $_FILES['fileToUpload']['name'];
        }

        try {
            $sql = "UPDATE `products` SET `name`=?,`url_image`=?,`sku`=?,`detail`=?,`category_id`=?,`brand_id`=?,`size`=?,`price`=? WHERE `id`=" . $request['id'];
            $stmt = $this->dbConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['name']);
            $stmt->bindParam(2, $url);
            $stmt->bindParam(3, $request['sku']);
            $stmt->bindParam(4, $request['detail']);
            $stmt->bindParam(5, $request['category_id']);
            $stmt->bindParam(6, $request['brand_id']);
            $stmt->bindParam(7, $request['size']);
            $stmt->bindParam(8, $request['price']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

    public function searchData($search)
    {
        try {
            $sql = "SELECT * FROM `products` WHERE `name` LIKE " . "'%" . $search . "%" . "'; ";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            return $this->convertAllToObj($stmt->fetchAll());
        } catch (\PDOException $exception) {
            die($exception->getMessage());
        }
    }
    public function delete($id)
    {
        $sql = "DELETE FROM `products` WHERE `id` = $id";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
    }
}