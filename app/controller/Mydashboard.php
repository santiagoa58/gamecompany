<?php

class Mydashboard extends Controller{
    public function __construct(){
        
    }
    
    public function index(){    
        if(!isLoggedIn()){
            redirect('user/signin');
        }
        
        redirect('mydashboard/mygames');
    }

    public function mygames(){
        $data = array();

        $this->view('mydashboard/mygames',$data);
    }

    public function leaderboard(){
        $data = array();

        $this->view('mydashboard/leaderboard',$data);
    }

    public function account(){
        $data = array();

        $this->view('mydashboard/account',$data);
    }

    public function playarea(){
        $data = array();

        $this->view('mydashboard/playarea',$data);
    }
}