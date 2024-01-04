<?php

    class UserService implements UserIntrface{

        private database $db;

        public function __construct(Database $db){
            $this->db = $db;
        }

        public function addUser(User $user){
            $addUser ="INSERT INTO appuser Values (:userId , :password , :firstName , :familyName)";ç
            
        }

    }

?>