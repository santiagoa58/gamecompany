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
        $data = array(
            array("name" => "Forest Game", "description" => "some forest game"),
            array("name" => "City Game", "description" => "some city game"),
            array("name" => "Forest Game 2", "description" => "forests again"),
            array("name" => "War Game", "description" => "some war game"),
            array("name" => "War Game 2", "description" => "war game again"),
            array("name" => "War Game 3", "description" => "yet another war game"),
            array("name" => "War Game 4", "description" => "final war game"),
            array("name" => "Peace Game", "description" => "a peacefull game"),
            array("name" => "Angry Cube", "description" => "some really angry cubes")
        );

        $this->view('gamestore/allgames',$data);
    }

    public function latestgames(){
        $data = array("name" => "Angry Cube", "description" => "Some really angry cubes ipsum dolor sit amet. Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.");

        $this->view('gamestore/latestgames',$data);
    }

    public function topselling(){
        $data = array(
            array("name" => "City Game", "description" => "some city game"),
            array("name" => "Forest Game 2", "description" => "forests again"),
            array("name" => "War Game 4", "description" => "final war game"),
            array("name" => "Peace Game", "description" => "a peacefull game"),
            array("name" => "Angry Cube", "description" => "some really angry cubes")
        );

        $this->view('gamestore/topselling',$data);
    }
}