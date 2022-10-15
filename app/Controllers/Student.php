<?php

namespace Project\Controllers;

class Student{
    public $id;
    public $name;

    public function store($data){
        session_start();      
        $_SESSION['students'][] = $data;
        }
    
}

?>