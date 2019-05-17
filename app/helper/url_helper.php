<?php
 
// Simple page redirect
function redirect($location){
    header('location:'.URLROOT.'/'.$location);
}

function getLinks(){
    return array(
        "home" => URLROOT,
        "aboutus" => URLROOT."/Pages/AboutUs",
        "statistics" => URLROOT."/Statistics",
        "register" => URLROOT."/User/register",
        "signin" => URLROOT."/User/signin",
        "premiummembership" => URLROOT."/Membership/premiummember",
        "regularmembership" => URLROOT."/Membership/regularmember",
        "contactus" => URLROOT."/#",
        "termsandconditions" => URLROOT."#",
        "mygames" => URLROOT."/Mydashboard/mygames",
        "myaccount" => URLROOT."/Mydashboard/account",
        "leaderboard" => URLROOT."/Mydashboard/leaderboard",
        "playarea" => URLROOT."/Mydashboard/playarea",
        "latestgames" => URLROOT."/Gamestore/latestgames",
        "allgames" => URLROOT."/Gamestore/allgames",
        "topselling" => URLROOT."/Gamestore/topselling"
    );
}
