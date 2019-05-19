<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo (SITENAME." - ".ucwords($page)); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700|Roboto:400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/payment.css">
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/public/css/style.css">
    <script src="<?php echo URLROOT; ?>/public/javascripts/jquery.min.js"></script>
    <!-- card validation library -->
    <script src="<?php echo URLROOT; ?>/public/javascripts/creditCardValidator.js"></script>
    <script src="<?php echo URLROOT; ?>/public/javascripts/payment.js"></script>
</head>
<body>
    <?php require_once APPROOT.'/view/inc/navbar.php';?>
