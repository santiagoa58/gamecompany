<?php

class Statistics extends Controller{
    public function __construct(){
        
    }
    
    public function index(){ 
        
        redirect('statistics/graphs');
    }
    
    public function graphs(){ 
        $data = array("");

        $this->view('statistics/graphs',$data);
    }
}