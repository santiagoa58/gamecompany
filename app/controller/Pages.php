<?php

    class Pages extends Controller{
        public function __construct(){
            
        }
        
        public function index(){    
            if(isLoggedIn()){
                redirect('mydashboard');
            }
            
            
            $data = [
                'title' => SITENAME,
                'subtitle' => 'Get our newly released <span id="latest-game">Game Name</span> today!'
            ];
            
           $this->view('pages/index',$data);
        }
        
        public function about(){
            $data = [
                'title' => 'About Us',
                'description' => 'App to share posts with other users which was made with an MVC framework that was made from scratch, Bootstrap 4, PHP, and MySQL.'
            ];
            
           $this->view('pages/about',$data);
        }
    }
