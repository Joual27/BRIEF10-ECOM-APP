<?php 

class CommandLine {
    private $orderId;
    private $productId;
    private $billId;
    public function __construct(){

    }
    public function getOrderId(){
        return $this->orderId;
    }
    public function setOrderId($orderId){
        $this->orderId = $orderId;
    }
    public function getProductId(){
        return $this->productId;
    }
    public function setProductId($productId){
        $this->productId = $productId;
    }
    public function getBillId(){
        return $this->billId;
    }
    public function setBillId($billId){
        $this->billId = $billId;
    }
}






?>