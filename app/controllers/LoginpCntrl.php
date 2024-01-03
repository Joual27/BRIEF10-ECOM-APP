<?php

session_start();

class LoginpCntrl extends login {

    private $user_uid;
    private $pwd;

    public function __construct($user_uid, $pwd)
    {   
        
        
    }

    public function loginUser()
    {
        $this->user_uid = $_POST['username'];
        $this->pwd = $_POST['password'];
       if ($this->emptyInput() == false) {

        $_SESSION['Error'] = 'input empty';
        exit();
       }
       $this->getUser($this->user_uid, $this->pwd);
    }

    private function emptyInput()
    {
        if (empty($this->user_uid)||empty($this->pwd)) {
            return false;
        }else {
            return true;
        }
    }

   
}