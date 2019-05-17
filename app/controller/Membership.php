<?php

class Membership extends Controller{
    public function __construct(){
        
    }
    
    public function index(){    
        if(isLoggedIn()){
            redirect('mydashboard');
        }
        // if(isMember()){
        //     redirect('mydashboard/account');
        // }
        redirect('membership/premiummember');
    }

    public function regularmember(){
        $data = array(
            "title" => "Regular Membership",
            "premiumtitle" => "Premium Membership",
            "price" => "$9.99",
            "membershipfrequency" => "per month", 
            "regularincludes" => [
                "get up to 2 free games per month",
                "get free demos of latest games"
            ]               
        );

        $this->view('membership/regularmember',$data);
    }

    public function premiummember(){
        $data = array(
            "regulartitle" => "Regular Membership",
            "title" => "Premium Membership",
            "price" => "$19.99",
            "membershipfrequency" => "per month",
            "premiumincludes" => [
                "unlimited games per month",
                "early access to pre-releases",
                "invites into beta tests",
                "get discounts on partner sites"
            ]              
        );

        $this->view('membership/premiummember',$data);
    }
}