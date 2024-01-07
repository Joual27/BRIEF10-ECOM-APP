<?php
class Order {
    private $orderId;
    private $orderedAt;
    private Customer $customer;

    public function __construct(){

    }

    public function getOrderId(){
        return $this->orderId;
    }

    public function setOrderId($orderId){   
        $this->orderId = $orderId;
    }

    public function getOrderedAt(){
        return $this->orderedAt;
    }

    public function setOrderedAt($orderedAt){
        $this->orderedAt = $orderedAt;
    }   

    public function getCustomer(){
        return $this->customer;
    }

    public function setCustomerId(Customer $customer){
        $this->customer = $customer;
    }
}
?>