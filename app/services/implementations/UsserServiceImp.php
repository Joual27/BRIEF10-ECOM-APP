<?php

    class UserServices implements UserIntrface{

        private database $db;

        public function __construct(Database $db){
            $this->db = $db;
        }

        public function addUser(User $user){
            $addUser ="INSERT INTO appuser Values (:userId , :password , :firstName , :familyName , :userName)";
            $this->db->query($addUser);
            $this->db->bind(":userId", $user->getUserId());
            $this->db->bind(":password", $user->getPassword());
            $this->db->bind(":firstName", $user->getFname());
            $this->db->bind(":familyName", $user->getLname());
            $this->db->bind(":userName",$user->getUserName());

            try{
                $this->db->execute();
             }
             catch(PDOException $e){
                die($e->getMessage());
             }  
          }

            
        }

    

?>