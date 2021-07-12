<?php


namespace App\Model;


class Category
{
    private $id;
    private $name;
    private $url_image;
    private $detail;

    /**
     * Category constructor.
     * @param $name
     * @param $detail
     */
    public function __construct($name, $detail)
    {
        $this->name = $name;
        $this->detail = $detail;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getUrlImage()
    {
        return $this->url_image;
    }

    /**
     * @param mixed $url_image
     */
    public function setUrlImage($url_image): void
    {
        $this->url_image = $url_image;
    }

    /**
     * @return mixed
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param mixed $detail
     */
    public function setDetail($detail): void
    {
        $this->detail = $detail;
    }




}