<?php 

class OrderAndCommandLineServiceImp implements OrderAndCommandLineService
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function addOrder(Order $order){
        // $addOrderQuery = "INSERT INTO ordertable VALUES (:orderId , :ordered_at, :customerId)";
        // $this->db->query($addOrderQuery);
        // $this->db->bind(":orderId",$order->getOrderId());
        // $this->db->bind(":ordered_at",$order->getOrderedAt());
        // $this->db->bind(":customerId",$order->getCustomer()->get));
    }

   
}



?>