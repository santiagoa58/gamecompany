<?php 
$page = 'home';
require_once APPROOT.'/view/inc/header.php';
?>
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">

        <h1 class="display-3 highlight-red breakword">
            <?php echo 'Error '.http_response_code(); ?>
        </h1>
        <p class="lead">
            <?php switch (http_response_code()){
                case 403:
                    echo 'Forbidden';
                    break;
                case 404:
                    echo 'Not Found';
                    break;
                default:
                    echo 'Something went wrong';
            }?>

        </p>
        <a href="<?php echo URLROOT?>" class="btn">Take Me Back Home</a>
    </div>
</div>

<?php 
require_once APPROOT.'/view/inc/footer.php';
?>
