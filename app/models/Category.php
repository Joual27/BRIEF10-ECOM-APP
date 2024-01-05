<?php




class Category{
    
    private $categoryId ;
    private $categoryName;
    private $categoryDesciption ;

    public function __construct($categoryName, $categoryDesciption){
        $this->categoryName = $categoryName;
        $this->categoryDesciption = $categoryDesciption;
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }

    public function getCategoryName()
    {
        return $this->categoryName;
    }

    public function setCategoryName($newName)
    {
        $this->categoryName = $newName;
    }

    public function getCategoryDescription()
    {
        return $this->categoryDesciption;
    }

    public function setCategoryId($newDescription)
    {
        $this->categoryDesciption = $newDescription;
    }

}


?>