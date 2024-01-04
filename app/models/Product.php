<?php


class Product{
    private $productId;
    private $productName ;
    private $productDesc;
    private Category $category ;


    public function __construct() {}

    public function getProductId() {
        return $this->productId;
    }

    public function setProductId($productId) {
        $this->productId = $productId;
    }

    public function getProductName() {
        return $this->productName;
    }

    public function setProductName($productName) {
        $this->productName = $productName;
    }

    public function getProductDesc() {
        return $this->productDesc;
    }

    public function setProductDesc($productDesc) {
        $this->productDesc = $productDesc;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory(Category $category) {
        $this->category = $category;
    }
}
?>