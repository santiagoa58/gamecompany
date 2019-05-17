<?php 
$page = 'mydashboard';
$subpage = 'leaderboard';
require_once APPROOT.'/view/inc/header.php';
?>
    <main>
        <!--dashboard-->
        <section class="dashboard">
            <div class="container">   

            <?php require_once APPROOT.'/view/inc/leftnav.php';?>

              <!-- dynamic display area -->
                <div class="display">
                    <div class="container-box">
                        <div class="row">
							
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once APPROOT.'/view/inc/footer.php';?>
