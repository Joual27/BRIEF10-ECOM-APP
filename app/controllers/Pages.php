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
       
    }