<?php

class Gamestore extends Controller{
    public function __construct(){
        
    }
    
    public function index(){    
        if(isLoggedIn()){
            //TODO
        }
        redirect('gamestore/allgames');
    }

    public function allgames(){
        $data = array();

        $this->view('gamestore/allgames',$data);
    }

    public function latestgames(){
        $data = array();

        $this->view('gamestore/latestgames',$data);
    }

    public function topselling(){
        $data = array();

        $this->view('gamestore/topselling',$data);
    }
}