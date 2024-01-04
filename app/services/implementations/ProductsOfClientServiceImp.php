<?php


class ProductsOfClientServiceImp implements ProductsOfClientService{
    private Database $db ;

    public function __construct($db){
        $this->db = $db ;
    }
    public function getAllProducts(){
        $fetchAllProducts =  "SELECT * FROM product";
        $this->db->query($fetchAllProducts);
        try{
            return $this->db->fetchMultipleRows();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }
    public function searchForProduct($searchValue){
       $searchForProductQuery = "SELECT * FROM product WHERE ProductName LIKE :searchValue";
       $this->db->query($searchForProductQuery);
       $this->db->bind(":searchValue",$searchValue."%");
       try{
         return $this->db->fetchMultipleRows();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }
    public function filterByCategory($category){

    }
    public function filterByPrice($min , $max){

    }
    public function addToCart(Product $product){

    }
}

?>