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
        
        $data = array(
            array("name" => "Angry Cube", "description" => "some really angry cubes"),
            array("name" => "Forest Game", "description" => "some forest game"),
            array("name" => "City Game", "description" => "some city game"),
            array("name" => "War Game", "description" => "forests again")
        );

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