<?php 
$page = 'mydashboard';
$subpage = 'mygames';
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
								<button class='btn btn--download' onclick='Download(\"".$game["name"]."\")'>Download</button>
								<a href = '".$links["playarea"]."'><button class='btn btn__alt btn__alt--play'>Play</button></a>
                            </div>
                            ";
						}?>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once APPROOT.'/view/inc/footer.php';?>