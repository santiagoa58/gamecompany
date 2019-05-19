<?php
// Include PayPalPro PHP library
require_once APPROOT.'/library/PaypalPro.class.php';

class Membership extends Controller{
    public function __construct(){   
        $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);   
        // Display error if failed to connect
        if ($db->connect_errno) {
            printf("Connect failed: %s\n", $db->connect_error);
            exit();
        }
    }
    
    public function index(){    
        // if(isLoggedIn()){
        //     redirect('mydashboard');
        // }
        // if(isMember()){
        //     redirect('mydashboard/account');
        // }
        echo("connadsfjapefqewr 4ccessfully!");
    

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
        $itemName   = "Premium Game Membership Purchase";
        $itemNumber = "PREMIUM";
        $payableAmount = 19.99;
        $currency   = "USD";
        
        $data = array(
            "payment" => [
                "itemNumber" => $itemNumber,
                "itemName" => $itemName,
                "payableAmount" => $payableAmount,
                "currency" => $currency
            ],
            "regulartitle" => "Regular Membership",
            "title" => "Premium Membership",
            "price" => "$$payableAmount",
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

    public function paymentprocess(){
        echo("connected to database through ajax in jquery successfully!");
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            // Buyer information
            $name = $_POST['name_on_card'];
            $nameArr = explode(' ', $name);
            $firstName = !empty($nameArr[0])?$nameArr[0]:'';
            $lastName = !empty($nameArr[1])?$nameArr[1]:'';
            $city = 'Charleston';
            $zipcode = '25301';
            $countryCode = 'US';
            
            // Card details
            $creditCardNumber = trim(str_replace(" ","",$_POST['card_number']));
            $creditCardType = $_POST['card_type'];
            $expMonth = $_POST['expiry_month'];
            $expYear = $_POST['expiry_year'];
            $cvv = $_POST['cvv'];
            
            // Create an instance of PaypalPro class
            $paypal = new PaypalPro();
            
            // Payment details
            $paypalParams = array(
                'paymentAction' => 'Sale',
                'itemName' => $itemName,
                'itemNumber' => $itemNumber,
                'amount' => $payableAmount,
                'currencyCode' => $currency,
                'creditCardType' => $creditCardType,
                'creditCardNumber' => $creditCardNumber,
                'expMonth' => $expMonth,
                'expYear' => $expYear,
                'cvv' => $cvv,
                'firstName' => $firstName,
                'lastName' => $lastName,
                'city' => $city,
                'zip'	=> $zipcode,
                'countryCode' => $countryCode,
            );
            $response = $paypal->paypalCall($paypalParams);
            $paymentStatus = strtoupper($response["ACK"]);
            if($paymentStatus == "SUCCESS"){
                // Transaction info
                $transactionID = $response['TRANSACTIONID'];
                $paidAmount = $response['AMT'];
                
                // Insert tansaction data into the database
                $sql = "INSERT INTO orders(name,card_num,card_exp_month,card_exp_year,card_cvc,item_name,item_number,item_price,item_price_currency,paid_amount,paid_amount_currency,txn_id,payment_status,created,modified) VALUES('".$name."','".$creditCardNumber."','".$expMonth."','".$expYear."','".$cvv."','".$itemName."','".$itemNumber."','".$payableAmount."','".$currency."','".$paidAmount."','".$currency."','".$transactionID."','".$paymentStatus."',NOW(),NOW())";
                $insert = $db->query($sql);
                $last_insert_id = $db->insert_id;
                
                $data['status'] = 1;
                $data['orderID'] = $last_insert_id;
            }else{
                $data['status'] = 0;
            }

            // Transaction status
            echo json_encode($data);
        }
    }
}