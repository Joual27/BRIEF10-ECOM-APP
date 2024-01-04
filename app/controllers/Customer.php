<?php 
    class Customer extends Controller {


        
        public function __construct(){

        }

        public function products(){
            $this->view('customer/products');
        }
<<<<<<< HEAD
        public function productOfCart(){
            $this->view('customer/productOfCart');
        }
 
=======
>>>>>>> b9407dc970e8014b202af795289e4f5441ee80e1

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

        public function searchForProduct(){
            if(isset($_POST["search"])){
                $searchValue = $_POST["searchValue"];
                $db = Database::getInstance();
                $productsOfClientService = new ProductsOfClientServiceImp($db);
                try{
                    $products = $productsOfClientService->searchForProduct($searchValue);
                    echo json_encode($products);
                }
                catch(PDOException $e){
                    die($e->getMessage());
                }    
            }
        }

    }

?>