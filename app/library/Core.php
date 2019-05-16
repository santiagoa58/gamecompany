<?php
/*
*
* App Core Class
* Creates URL & loads core controller
* URL FORMAT: /controller/method/params
*/

class Core {
    protected $currentController = "Pages";
    protected $currentMethod = "index";
    protected $params = [];
    
    public function __construct(){
        
        $url = $this->getUrl();
        
        //Look in controller folder for first value
        if(file_exists('../app/controller/' . ucwords($url[0]).'.php')){
            //if exists then set as controller
            $this->currentController = ucwords($url[0]);
            
            //unset 0 Index
            unset($url[0]);
        }
        
        // Require the controller
        require_once '../app/controller/'.$this->currentController.'.php';
        
        //Instantiate controller class
        $this->currentController = new $this->currentController;
        
        //check for second part of url
        if(isset($url[1])){
            
            //check to see if method exists in controller
            if(method_exists($this->currentController,$url[1])){
                $this->currentMethod = $url[1];
            
            //unset 1 Index
            unset($url[1]);
            } else {
                header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found", true, 404);                
                include(APPROOT.'/view/errors/error.php');
                die();
            }
        }
        
        // Get parameters
        $this->params = $url ? array_values($url) : [];
        
        //call a callback with an array of parameters
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
    }
    
    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
