<?php 
$page = 'gamestore';
$subpage = 'latestgames';
require_once APPROOT.'/view/inc/header.php';
?>
    <main>
        <!-- dashboard-->
        <section class="dashboard">
            <div class="container">

            <?php require_once APPROOT.'/view/inc/leftnav.php';?>

              <!-- dynamic display area -->
                <div class="display">
                    <div class="container-box">
                        <div class="row">
                            <div class="container-box--img">
                                <img src="#" alt="gameName">
                                <div id="rating">
                                    <!-- star icon = #9733; -->
                                    <i class="icon">&#9733;</i>
                                    <i class="icon">&#9733;</i>
                                    <i class="icon">&#9733;</i>
                                    <i class="icon">&#9733;</i>
                                    <i class="icon icon__inactive">&#9733;</i>
                                </div>
                            </div>
                            <div class="container-box--title"><h3><?php echo $data["name"]; ?></h3></div>
                        </div>
                        <div class="content-box--contents">
                            <h4 class="contents--title">Synopsis</h4>
                            <p><?php echo $data["description"]; ?></p>
                            <button class="btn btn--buynow">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once APPROOT.'/view/inc/footer.php';?>