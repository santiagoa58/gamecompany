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
            <div class="container section-box">
                <div class="section-title--wrapper">
                    <h2 class="section-title">meet the team</h2>
                    <div class="dotted-underline"></div>
                </div>   
                <div class="container--content">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati omnis odit reprehenderit unde, earum eaque corporis sunt quisquam quibusdam tenetur cumque quia quo nihil aliquid distinctio, deserunt possimus sapiente iste?</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati omnis odit reprehenderit unde, earum eaque corporis sunt quisquam quibusdam tenetur cumque quia quo nihil aliquid distinctio, deserunt possimus sapiente iste?</p>
                </div>
            </div>
        </section>
    </main>

    <?php require_once APPROOT.'/view/inc/footer.php';?>
