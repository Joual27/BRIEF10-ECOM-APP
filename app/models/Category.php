<?php




class Category {
    private $categoryId;
    private $categoryName;
    private $categoryDesc;

    public function __construct() {

    }

    
    public function getCategoryId() {
        return $this->categoryId;
    }

    
    public function setCategoryId($categoryId) {
        $this->categoryId = $categoryId;
    }

    public function getCategoryName() {
        return $this->categoryName;
    }

    
    public function setCategoryName($categoryName) {
        $this->categoryName = $categoryName;
    }

   
    public function getCategoryDesc() {
        return $this->categoryDesc;
    }

    
    public function setCategoryDesc($categoryDesc) {
        $this->categoryDesc = $categoryDesc;
    }
}

?>