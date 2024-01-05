<?php





class ProductOfCardServiceImp implements ProductOfCardServiceI{

    private Database $db;

    public function __construct(Database $db){
       $this->db = $db ;
    }
    public function addToCard($productId,$cardId){
       $addPocQuery = "INSERT INTO productsofcart VALUES(:productId , :cardId)";
       $this->db->query($addPocQuery);
       $this->db->bind(":productId",$productId);
       $this->db->bind(":cardId", $cardId); 
       try{
        $this->db->execute();
       }
       catch(PDOException $e){
          $e->getMessage();
       }
    }

    public function deleteFromCard($productId,$cardId){
       $deleteProductOfCardQuery = "DELETE FROM productsofcart WHERE productId = :productId AND cartId = :cardId ";
       $this->db->query($deleteProductOfCardQuery);
       $this->db->bind(":productId",$productId);
       $this->db->bind(":cardId",$cardId);
       try{
        $this->db->execute();
       }
       catch(PDOException $e){
        die($e->getMessage());
       }
    }

    public function getAllProductsOfCard($customerId){
        $getAllProductsOfCardQuery = "SELECT * FROM product JOIN productsofcart ON product.productId = productsofcart.productId JOIN cart ON cart.cartId = productsofcart.cartId WHERE cart.customerId = :customerId";
        $this->db->query($getAllProductsOfCardQuery);
        $this->db->bind(":customerId",$customerId);

        try{
            return $this->db->fetchMultipleRows();
        }
        catch(PDOException $e){
            $e->getMessage();
        }
        
    }}
?>