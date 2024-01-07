<?php 

class AddOrderServiceImp implements AddOrderService {
    private $db;

    public function __construct($db){
        $this->db = $db;
    }

    public function addOrder(Order $order){
        $orderId = uniqid();
        $addOrderQuery = "INSERT INTO ordertable (orderId, customerId, ordered_at) VALUES (:orderId, :customerId, NOW())";
        $this->db->query($addOrderQuery);
        $this->db->bind(':orderId', $orderId);
        $this->db->bind(':customerId', $order->getCustomerId());

        try {
            $this->db->execute();
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}


?>