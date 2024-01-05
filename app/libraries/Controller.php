<?php

<<<<<<< HEAD
class Controller
{
    // Load Model
    // public function model($model) {
    // Require model file 
    //     require_once '../app/models/'. $model .'.php';
    // Instance model
    //     return new $model();
    // }
    // load View 
    public function view($view, $data = [])
    {
        // Check for View file 
        if (file_exists('../app/views/' . $view . '.php')) {
            // Required File from Views
            require_once '../app/views/' . $view . '.php';
        } else {
            echo "File not Exists";
=======
    class Controller {
        // Load Model
        // public function model($model) {
        //     // Require model file 
        //     require_once '../app/models/'. $model .'.php';
        //     // Instance model
        //     return new $model();
        // }
        // load View 
        public function view($view , $data = []) {
            // Check for View file 
            if (file_exists('../app/views/' . $view . '.php')) {
                // Required File from Views
                require_once '../app/views/' . $view . '.php';
            }else {
                echo "File not Exists";
            }
>>>>>>> f62ccb173d44445dc122a9cf6c6c1ca76292c98d
        }
    }
}
