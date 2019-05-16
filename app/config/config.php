<?php 

// DB Params
define('DB_HOST', 'csci355-mysql.mysql.database.azure.com');
define('DB_USER', 'csci355admin@csci355-mysql');
define('DB_PASS', 'csci_355');
define('DB_NAME', 'gamecompany');

// PayPal API configuration
define('PAYPAL_API_USERNAME', 'API_Username');
define('PAYPAL_API_PASSWORD', 'API_Password');
define('PAYPAL_API_SIGNATURE', 'API_Signature');
define('PAYPAL_SANDBOX', TRUE); //TRUE or FALSE

    // App Root
define('APPROOT', dirname(dirname(__FILE__)));

    // URL Root
define ("URLROOT", "http://localhost/gamecompany");

    // Site Name
define("SITENAME", "The Game Company");

    // App Version
define("APPVERSION", '1.0'); 