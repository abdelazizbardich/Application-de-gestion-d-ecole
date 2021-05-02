<?php

require "./_classes/controller.php";
require "./models/admin.model.php";

class authController extends controller{
    public function login(){
        $admin = new Admin();
        $admin = $admin->find("email",$_POST['email']);
        if(password_verify($_POST['password'],$admin->password)){
            redirect("/admin");
        }else{
            return $this->view("login");
        }
    }
}