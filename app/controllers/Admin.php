<?php


    class Admin extends Controller {

        public function products() 
        {
            $this->view("admin/products");
        }

        public function categories() 
        {
            $this->view("admin/categories");
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