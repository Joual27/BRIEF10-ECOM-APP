<?php



class productService implements ServiceproductInterface{
     
    private Database $db;

    public function __construct( $db){
        $this->db = $db;
    }

    public function getAllproducts(){
        $bringproducts = "select * from product";
        $this->db->query($bringproducts);
        try{
            return $this->db->fetchMultipleRows();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
        
    }
    public function addproduct(product $product){
       $addprod = "insert into product values (:productId,:ProductName,:productDesc,:categoryId,:price,:image)";
       $this->db->query($addprod);
       $this->db->bind(":productId",$product->getProductId());
       $this->db->bind(":ProductName",$product->getProductName());
       $this->db->bind(":image",$product->getImage());
       $this->db->bind(":productDesc",$product->getProductDesc());
       $this->db->bind(":price",$product->getPrice());
       $this->db->bind(":category",$product->getCategory()->getCategoryID());

       try{
        $this->db->execute();
       }
       catch(PDOException $e){
          die($e->getMessage());
       }
    }
    public function updateproduct(product $product){
        $updateproduct = "update product set ProductName = :ProductName ,ProductDesc = :ProductDesc, category = :category , price = :price, image = :image where productId = :productId ";
        $this->db->query($updateproduct);
        $this->db->bind(":ProductName",$product->getproductName());
        $this->db->bind(":image",$product->getImage());
        $this->db->bind(":productDesc",$product->getProductDesc());
        $this->db->bind(":price",$product->getPrice());
        $this->db->bind(":category",$product->getCategory()->getCategoryId());
        $this->db->bind(":productId",$product->getProductId());

        try{
            $this->db->execute();
        }
        catch(PDOException $e){
            die($e->getMessage());
    }
}

        public function deleteproduct($productId){
            $deleteproduct= "delete from product where productID = :productId";
            $this->db->query($deleteproduct);
            $this->db->bind(":productId",$productId);
            try{
                $this->db->execute();
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }

}


?>