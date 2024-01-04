<?php

class Customer{

        private $customerId;
        private User $user; 
        private $email;
        private $phone;
        private $adresse;

        private $db;


        public function __construct(Database $db){
            $this->db = $db;
        }
        
        public function getCustomerId() {
            return $this->customerId;
        }
    
        public function setCustomerId($customerId) {
            $this->customerId = $customerId;
        }
            public function getUser() {
            return $this->user;
        }
    
        public function setUser(User $user) { 
            $this->user = $user;
        }
    
        public function getEmail() {
            return $this->email;
        }
    
        public function setEmail($email) {
            $this->email = $email;
        }
    
        public function getPhone() {
            return $this->phone;
        }
    
        public function setPhone($phone) {
            $this->phone = $phone;
        }
    
        public function getAdresse() {
            return $this->adresse;
        }
    
        public function setAdresse($adresse) {
            $this->adresse = $adresse;
        }
       
}

?>