<?php

class Admin extends Controller {
    public function categories() {
        $this->view("admin/categories");
    }

    public function getAllProducts() {
        $db = Database::getInstance();
        $productsOfClientService = new ProductsOfClientServiceImp($db);
        try {
            $allProducts = $productsOfClientService->getAllProducts();
            echo json_encode($allProducts);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function products() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = uniqid();
            $productName = $_POST["ProductName"];
            $category = $_POST["category"];
            $productDesc = $_POST["productDesc"];
            $price = $_POST["price"];

            var_dump($id, $productName, $category, $productDesc, $price);

            if (empty($productName) || empty($_FILES["image"]["name"]) || empty($productDesc) || empty($price) || empty($category)) {
                $data["error"] = "pls fill datas";
            } else {
                
                $fileName = basename($_FILES["image"]["name"]);
                $placement =  $fileName;
                $fileType = pathinfo($placement, PATHINFO_EXTENSION);

                $allowedTypes = array("jpg", "png", "jpeg");

                if (in_array($fileType, $allowedTypes)) {
                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $placement)) {
                        $newproduct = new product();
                        $newproduct->setProductId($id);
                        $newproduct->setProductName($productName);
                      
                        $newproduct->setProductDesc($productDesc);
                        $newproduct->setPrice($price);
                        $newproduct->setCategory($category);

                        try {

                            $db = Database::getInstance();

                            $productService  = new productService($db);                            
                            
                            $productService->addproduct($newproduct);
                            header("Location:" . URLROOT . "/admin/product");
                        } catch (PDOException $e) {
                            die($e->getMessage());
                        }
                    } else {
                        $data["error"] = "upload failed . TRY AGAIN !";
                    }
                } else {
                    $data["error"] = "only JPG , JPEG OR PNG are allowed";
                }
            }
        }
        $this->view("admin/products", $data);

    }
}
?>