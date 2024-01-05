
<?php


interface ServiceproductInterface{
    public function getAllproducts();
    public function addproduct(product $product);
    public function updateproduct(product $product);
    public function deleteproduct($productId);

}


?>