<?php


class ProductsOfCartServiceImp implements ProductsOfCartService{
    private Database $db ;

    public function __construct($db){
        $this->db = $db ;
    }
    public function getAllProductsOfCart(){
        $fetchAllProductsOfCart = "select * from appUser JOIN customer ON appuser.userId = customer.userId JOIN cart ON customer.customerId = cart.customerId JOIN productsofcart ON productsofcart.cartId = cart.cartId JOIN product ON productsofcart.productId = product.productId WHERE customer.customerId = 99";
        $this->db->query($fetchAllProductsOfCart);
        try{
            return $this->db->fetchMultipleRows();
        }catch(PDOException $e){
            die($e->getMessage());
    }
}
}


?>