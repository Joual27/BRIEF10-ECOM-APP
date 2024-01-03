<?php 
    class Customer extends Controller {


        
        public function __construct(){

        }

        public function products(){
            $this->view('customer/products');
        }
 

        public function getAllProducts(){
            $db = Database::getInstance();
            $productsOfClientService = new ProductsOfClientServiceImp($db);
            try{
               $allProducts = $productsOfClientService->getAllProducts();
               echo json_encode($allProducts);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }

        }

       
    }

?>