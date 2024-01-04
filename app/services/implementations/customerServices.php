<?php

class CustomerServices implements CustomerIntrface{

    private Database $db;
    public function __construct(Database $db){
        $this->db = $db;
    }

    public function addCustomer(Customer $customer){
        $addCustomer ="INSERT INTO customer Values (:customerId, :userId, :email, :phone, :adresse)";
        $this->db->query($addCustomer);
        $this->db->bind(":customerId", $customer->getCustomerId());
        $this->db->bind(":userId", $customer->getUser());
        $this->db->bind(":email", $customer->getEmail());
        $this->db->bind(":phone", $customer->getPhone());
        $this->db->bind(":adresse", $customer->getAdresse());

        try{    
            $this->db->execute();
         }
         catch(PDOException $e){
            die($e->getMessage());
         }  
      }
        

}

?>