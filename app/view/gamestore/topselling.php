<?php 
$page = 'gamestore';
$subpage = 'topselling';
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
                        <?php foreach($data as $game){
                            echo "
                            <div class='row-item'>
                                <div class='game-card'>".$game["name"]."</div>
                                <button class='btn btn--viewinfo' onclick='viewGameInfo(\"".$game["name"]."\")'>View Info</button>
                            </div>
                            ";
                        }?> 
                        </div>                         
                    </div>
                </div>
            <?php require_once APPROOT.'/view/inc/modal.php';?>
            </div>
        </section>
    </main>

    <?php require_once APPROOT.'/view/inc/footer.php';?>