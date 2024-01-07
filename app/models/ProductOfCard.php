<?php


class ProductOfCard{
    private Product $product ;

    private Card $card ;

    public function __construct(){

    }


    public function getProduct(){
        return $this->product;
    }
    public function setProduct(Product $product){
        $this->product = $product;
    }
    public function getCard(){
        return $this->card;
    }
    public function setCard(Card $card){
        $this->card = $card;
    }

}


?>