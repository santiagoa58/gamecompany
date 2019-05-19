<?php
/*
 * Basic Site Settings and API Configuration
 */

// Product details
$itemName   = "Premium Game Membership Purchase";
$itemNumber = "PREMIUM";
$payableAmount = 10;
$currency   = "USD";

 
// PayPal API configuration
define('PAYPAL_API_USERNAME', 'API_Username');
define('PAYPAL_API_PASSWORD', 'API_Password');
define('PAYPAL_API_SIGNATURE', 'API_Signature');
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE

// Database configuration
define('DB_HOST', 'MySQL_Database_Host');
define('DB_USERNAME', 'MySQL_Database_Username');
define('DB_PASSWORD', 'MySQL_Database_Password');
define('DB_NAME', 'MySQL_Database_Name');
