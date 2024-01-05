<?php 
    class Customer extends Controller {


        
        public function __construct(){

        }

        public function products(){
            $this->view('customer/products');
        }
        public function productOfCart(){
            $this->view('customer/productOfCart');
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

        public function getAllProductsOfCart(){
            $db = Database::getInstance();
            $id = "25";
            $productsOfCartService = new ProductsOfCartServiceImp($db);
            try{
                $allProductsOfCart = $productsOfCartService->getAllProductsOfCart();
                echo json_encode($allProductsOfCart);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }


        public function getAllProductsOfCustomer(){
            $db = Database::getInstance();
            $id = "25";
            $productsOfCartService = new ProductOfCardServiceImp($db);
            try{
                $allProductsOfCart = $productsOfCartService->getAllProductsOfCard($id);
                echo json_encode($allProductsOfCart);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }


        public function addProductOfCard(){
            if(isset($_POST["add"])){
                $productId = $_POST["productId"];
                $id = "25";
                $cardId = "100";
                $db = Database::getInstance();
                $productsOfCartService = new ProductOfCardServiceImp($db);
                try{
                    $productsOfCartService->addToCard($productId,$cardId);
                    $allProductsOfCart = $productsOfCartService->getAllProductsOfCard($id);
                    echo json_encode($allProductsOfCart);
                }
                catch(PDOException $e){
                    die($e->getMessage());
                }

            }
        }
        public function deleteProductOfCard(){
            if(isset($_POST["delete"])){
                $id = "25";
                $cardId = "100";
                $productId = $_POST["productId"];
                $db = Database::getInstance();
                $productsOfCartService = new ProductOfCardServiceImp($db);
                try{
                    $productsOfCartService->deleteFromCard($productId,$cardId);
                    $allProductsOfCart = $productsOfCartService->getAllProductsOfCard($id);
                    echo json_encode($allProductsOfCart);
                }
                catch(PDOException $e){
                    die($e->getMessage());
                } 
            }
        }

        public function getAllCategories(){
            $db = Database::getInstance();
            $productOfClientService = new ProductsOfClientServiceImp($db);
            try{
                $categories = $productOfClientService->displayCategory();
                echo json_encode($categories);
            }
            catch(PDOException $e){
                die($e->getMessage());
            } 
        }

        public function getProductsOfCategory(){
            $categoryId = $_POST["id"];
            $db = Database::getInstance();
            $productOfClientService = new ProductsOfClientServiceImp($db);
            
            try{
                $productsOfCategory = $productOfClientService->getProductsByCategory($categoryId);
                echo json_encode($productsOfCategory);
            }
            catch(PDOException $e){
                die($e->getMessage());
            } 
        }


    }

?>
