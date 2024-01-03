<?php


interface ProductsOfClientService{

    public function getAllProducts();
    public function searchForProduct($productName);
    public function filterByCategory($category);
    public function filterByPrice($min , $max);
    public function addToCart(Product $product);
}
?>