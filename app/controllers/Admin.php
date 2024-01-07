<?php


    class Admin extends Controller {


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


        /* Admin Only ========== */
        
        public function products() 
        {
            $this->view("admin/products");
        }







        /* Category  ==== */ 
        public function categories() 
        { 
            /* Add Category */ 
            if (isset($_POST['addCategory'])) {

                $db = Database::getInstance();

                $name = $_POST['name'];
                $description = $_POST['description'];

                $category = new Category($name, $description);
                $categoryService = new ProductsOfClientServiceImp($db);

                $categoryService->addCategory($category);
            }

            /* Delete Category */ 
            if (isset($_GET['delete'])) {
                $id = $_GET['delete'];
                $db = Database::getInstance();
                
                $categoryService = new ProductsOfClientServiceImp($db);

                $categoryService->deleteCategory($id);
            }

            /* Display Category */
            $db = Database::getInstance();
            $category = new ProductsOfClientServiceImp($db);
            $categoryData = $category->displayCategory();
            $data = [
                'data' => $categoryData
            ];

            /* Update Category */ 
            if (isset($_GET['update'])) {
                echo "
                    <script>
                        document.addEventListener('DOMContentLoaded', () => {
                            document.getElementById('updateContainer').classList.remove('hidden');
                        });
                    </script>
                ";

                $id = $_GET['update'];

                $db = Database::getInstance();
                $categoryService = new ProductsOfClientServiceImp($db);
                $ctgTooEdit = $categoryService->categoryToEdit($id);

                $data = [
                    'data' => $categoryData,
                    'CategoryToEdit' => $ctgTooEdit
                ];

                $this->view("admin/categories", $data);

            }

            if (isset($_POST['updateCategory'])) {

                $name = $_POST['updateName'];
                $description = $_POST['updateDescription'];

                $category = new Category($name, $description);

                $categoryService->updateCategory($category, $id);
            }

            $this->view("admin/categories", $data);

        }
    }
?>