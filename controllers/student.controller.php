<?php

require "./_classes/controller.php";

class studentController extends controller{
    public function index($action){
        switch ($action) {
            case 'add':
                return $this->view("admin.students.add");
                break;
            
            default:
                # code...
                break;
        }
    }
}