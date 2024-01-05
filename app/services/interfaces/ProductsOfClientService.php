<?php


interface ProductsOfClientService{

    public function getAllProducts();
    public function searchForProduct($searchValue);
    public function filterByCategory($category);
    public function filterByPrice($min , $max);
    public function addToCart(Product $product);

    /* Admin ONly =======  */
    public function displayCategory();
    public function addCategory(Category $category);
    public function deleteCategory($id);
}
?>