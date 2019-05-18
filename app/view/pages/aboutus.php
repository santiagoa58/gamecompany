<?php 
$page = 'aboutus';
require_once APPROOT.'/view/inc/header.php';
?>

    <main>
        <!-- About Us -->
        <section class="first-section">     
            <div class="container section-box">
                <div class="section-title--wrapper">
                    <h2 class="section-title"><?php echo $data['title']; ?></h2>
                    <div class="dotted-underline"></div>
                </div>   
                <div class="container--content">
                    <p><?php echo $data['description']; ?></p>
                </div>
            </div>
        </section>
    </main>

    <?php require_once APPROOT.'/view/inc/footer.php';?>
