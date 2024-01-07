<?php


class ProductsOfClientServiceImp implements ProductsOfClientService{
    private Database $db ;

    public function __construct($db){
        $this->db = $db ;
    }

    public function getAllProducts(){
        $fetchAllProducts =  "SELECT * FROM product";
        $this->db->query($fetchAllProducts);
        try{
            return $this->db->fetchMultipleRows();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }


    public function getProductsByCategory($categoryId){
        $fetchProducts = "SELECT * FROM product WHERE categoryId = :categoryId";
        $this->db->query($fetchProducts);
        $this->db->bind(":categoryId",$categoryId);
        try{
            return $this->db->fetchMultipleRows();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function searchForProduct($searchValue){
        $searchForProductQuery = "SELECT * FROM product WHERE ProductName LIKE :searchValue";
        $this->db->query($searchForProductQuery);
        $this->db->bind(":searchValue",$searchValue."%");
        try{
            return $this->db->fetchMultipleRows();
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function filterByCategory($category){
    }
    public function filterByPrice($min , $max){
    }
    public function addToCart(Product $product){
    }






    /* Admin Only =======  */

    /* Add Category */ 
    public function addCategory(Category $category)
    {
        $categoryId = uniqid(); 
        $categoryName = $category->getCategoryName();
        $categoryDescription = $category->getCategoryDescription();

        $sql = "
            INSERT INTO category (categoryId, categoryName, categoryDesc)
            VALUES (:id, :name, :description);
        ";

        $this->db->query($sql);
        $this->db->bind(":id", $categoryId);
        $this->db->bind(":name", $categoryName);
        $this->db->bind(":description", $categoryDescription);

        try {
            $this->db->execute();
        } catch (PDOException $e) {
            echo "ERROR INSERING CATEGORY DATA ! " . $e->getMessage();
            die();
        }
    }

    /* Display Category */ 
    public function displayCategory()
    {
        $sql = "SELECT * FROM category";
        $this->db->query($sql);
        try {
            return $this->db->fetchMultipleRows();
        } catch (PDOException $e) {
            echo "ERROR FETCHING CATEGORY DATA ! " . $e->getMessage();
        }
    }

    /* Call Category To Edit  */ 
    public function categoryToEdit($id)
    {
        $sql = "SELECT * FROM category WHERE categoryId = :id";
        $this->db->query($sql);
        $this->db->bind(":id", $id);

        try {
            return $this->db->fetchOneRow();
        } catch (PDOException $e) { 
            echo "ERROR FETCHING CATEGORY DATA ! " . $e->getMessage();
        }
    }



    /* Update Category */ 
    public function updateCategory(Category $category, $id)
    {
        $categoryNameUp = $category->getCategoryName();
        $categoryDescriptionUp = $category->getCategoryDescription();

        $sql = "
            UPDATE category
            SET categoryName = :name, categoryDesc = :description
            WHERE id = :id
        ";

        $this->db->query($sql);
        $this->db->bind(":id", $id);
        $this->db->bind(":name", $categoryNameUp);
        $this->db->bind(":description", $categoryDescriptionUp);

        try {
            $this->db->execute();
        } catch (PDOException $e) {
            echo "ERROR INSERING CATEGORY DATA ! " . $e->getMessage();
            die();
        }
    }
    
    /* Delete Category */ 
    public function deleteCategory($id)
    {
        $sql = "DELETE FROM category WHERE categoryId = :id";

        $this->db->query($sql);
        $this->db->bind(":id", $id);

        try {
            $this->db->execute();
        } catch (PDOException $e) {
            echo "ERROR DELETING CATEGORY DATA ! " . $e->getMessage();
            die();
        } 
    }
}

?>