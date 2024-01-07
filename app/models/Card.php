<?php



class Card{
    private $cardId ;
    private $customerId ;

    public function __construct(){

    }

    public function getCardId(){
        return $this->cardId;
    }
    public function setCardId($cardId){
        $this->cardId = $cardId;
    }
    public function getCustomerId(){
        return $this->customerId;
    }
    public function setCustomerId($customerId){
        $this->customerId = $customerId;
    }
}


?>