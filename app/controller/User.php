<?php

class User extends Controller{
    public function __construct(){
        
    }
    
    public function index(){    
        if(isLoggedIn()){
            redirect('mydashboard');
        }
        redirect('user/signin');
    }

    public function signin(){
        $data = array(
            "title" => "Sign In"
        );
        $this->view('user/signin',$data);
    }

    public function register(){
        $data = array(
            "title" => "Register"
        );
        $this->view('user/register',$data);
    }
}