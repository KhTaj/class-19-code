<?php

namespace Project\Controllers;

class Student{
    public $id;
    public $name;

    public function __construct(){
        session_start();
    }

    public function store($data){
        // session_start();      
        $_SESSION['students'][] = $data;
        }


    public function destroy($id){

        $students = $_SESSION['students'];

foreach ($students as $key => $student){
    if($student['id'] == $id) {
        unset($_SESSION['students'][$key]);
    }
}


    }



    
}

?>