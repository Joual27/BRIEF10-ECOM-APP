<?php



interface ProductOfCardServiceI{


    public function addToCard($productId,$cardId);

    public function deleteFromCard($productId,$cardId);

    public function getAllProductsOfCard($customerId);
}

?>