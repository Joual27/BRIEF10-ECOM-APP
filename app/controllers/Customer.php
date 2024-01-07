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
            $productsOfCartService = new ProductsOfCartServiceImp($db);
            try{
                $allProductsOfCart = $productsOfCartService->getAllProductsOfCart();
                echo json_encode($allProductsOfCart);
            }
            catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function addOrderAndCommandLine() {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['addOrder'])) {
                $customerId = "99";
                $orderId = uniqid();
                $productIds = isset($_POST['productIds']) ? $_POST['productIds'] : [];
                $billId = "123456789"; // You can set this value based on your logic if needed
        
                $order = new Order();
                $order->setOrderId($orderId);
                $order->setCustomerId($customerId);
        
                $db = new Database();
                $OrderAndCommandLineService = new OrderAndCommandLineServiceImp($db);
        
                try {
                    $OrderAndCommandLineService->addOrderAndCommandLine($order, $productIds, $billId);
                } catch (PDOException $e) {
                    die($e->getMessage());
                }
            }
        }


        }
        




    

?>