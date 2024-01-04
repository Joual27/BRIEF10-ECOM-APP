<?php

    class Pages extends Controller{
        public function __construct()
        {

        }
        public function index() {

            $data = [
                'title' => 'You Welcomee to Our Website',

            ];
            
            $this->view('pages/index' , $data );
        }

        public function regestration(){
            $this->view('pages/regestration');
        }


        public function addUser(){
            if(isset($_POST["add"])){
                $userId = uniqid();
                $password = $_POST["password"];
                $fname = $_POST["fname"];
                $lname = $_POST["lname"];
                $userName = $_POST["userName"];

                $userToAdd = new user();
                $userToAdd->setUserId($userId);
                $userToAdd->setPassword($password);
                $userToAdd->setFname($fname);
                $userToAdd->setLname($lname);
                $userToAdd->setUserName($userName);


            }
        }


            public function addCustomer(){
                if(isset($_POST["add"])){
                    $customerId = uniqid();
                    $userId = $_POST["userId"];
                    $email = $_POST["email"];
                    $phone = $_POST["phone"];
                    $adresse = $_POST["adresse"];

                    $customarToAdd = new customer();
                    $customarToAdd->setCustomerId($customerId);
                    $customarToAdd->setUser($userId);
                    $customarToAdd->setEmail($email);
                    $customarToAdd->setPhone($phone);
                    $customarToAdd->setAdresse($adresse);

                }  



            }
 
    }