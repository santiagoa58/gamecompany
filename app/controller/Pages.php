<?php

    class Pages extends Controller{
        public function __construct(){
            
        }
        
        public function index(){  
            $links = getLinks();

            $latestGames = array(
                "title" => "Top Games",
                "latest" => "Angry Cube",
                "games" => array('Angry Cube', 'City Game', 'War Game 4', 'Forest Game 2')
            );
            $membership = array(
                "regulartitle" => "Regular Membership",
                "premiumtitle" => "Premium Membership",
                "regularprice" => "$9.99",
                "premiumprice" => "$19.99",
                "membershipfrequency" => "per month",
                "premiumincludes" => [
                    "unlimited games per month",
                    "early access to pre-releases",
                    "invites into beta tests",
                    "get discounts on partner sites"
                ], 
                "regularincludes" => [
                    "get up to 2 free games per month",
                    "get free demos of latest games"
                ]               
            );
            $faq = array(
                "title" => "Frequently Asked Questions",
                "content" => array(
                [
                    "question" => "Where are my games?", 
                    "answer" => "All of your games are available for download and can be found in <a href='".$links["mygames"]."'>my dashboard</a> once you are signed in."
                ],
                [
                    "question" => "How can I change my membership?", 
                    "answer" => "You can upgrade or downgrade your membership by heading to <a href=\"".$links["myaccount"]."\">my dashboard</a> once you are logged in.  Navigate to account info and click on the change button next to membership type."
                ],
                [
                    "question" => "Can I purchase individual games without a subscription plan?", 
                    "answer" => "Yes! Once you create an account, head on over to the <a href=\"".$links["allgames"]."\">game store</a> and only pay for the games you want."                    
                ]
                )
            );

            $data = [
                'title' => 'The Game Company',
                'subtitle' => "Get our newly released ".$latestGames["latest"]." today!",
                'topgames' => $latestGames,
                'membership' => $membership,
                'faq' => $faq
            ];
            
           $this->view('pages/index',$data);
        }
        
        public function aboutus(){
            $data = [
                'title' => 'About Us',
                'description' => 'We are The GameCompany and we provide original games, from first person shooters to racing to role playing games. Our games are available to purchase individually or are free to play with a monthly subscription plan.  We strive to provide our customers with the most options so that they can enjoy our games in as many ways as possible.  Wether it be playing online through our website, or on a mobile device.'
            ];
            
           $this->view('pages/aboutus',$data);
        }
    }
