<?php 
$page = 'gamestore';
$subpage = 'allgames';
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
                            <div class="row-item">
                                <div class="game-card">forest game</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">city game</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">forest game 2</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">war game</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">war game 2</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">war game 3</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">war game 4</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                                <div class="row-item">
                                    <div class="game-card">peace game</div>
                                <button class="btn btn--viewinfo">View Info</button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once APPROOT.'/view/inc/footer.php';?>
