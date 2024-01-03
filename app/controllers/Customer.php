<?php 
    class Customer extends Controller {
        public function __construct(){

        }

        public function products(){
            $this->view('customer/products');
        }
    }

?>