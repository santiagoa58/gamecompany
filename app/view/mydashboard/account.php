<?php 
$page = 'mydashboard';
$subpage = 'account';
require_once APPROOT.'/view/inc/header.php';
?>
    <main>
        <!-- gamestore dashboard-->
        <section class="dashboard">
            <div class="container">
                
                <?php require_once APPROOT.'/view/inc/leftnav.php';?>

              <!-- dynamic display area -->
                <div class="display">
                    <div class="container-box">
                        <h2 class="section-title">Account Info</h2>
                        <div id="account">
                            <div class ="account-row">
                                <div class="account-data">username</div>
                                <div class="account-data">username<span class="icon">edit</span>
                                </div>
                            </div>
                            <div class ="account-row">
                                <div class="account-data">email</div>
                                <div class="account-data">example@email.com<span class="icon">edit</span>
                                </div>
                            </div>
                            <div class ="account-row">
                                <div class="account-data">full name</div>
                                <div class="account-data">John Doe<span class="icon">edit</span></div>
                            </div>
                            <div class ="account-row">
                                <div class="account-data">password</div>
                                <div class="account-data"><span class="password-symbol">&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;</span><span class="icon">edit</span></div>
                            </div>
                            <div class ="account-row">
                                <div class="account-data">birthday</div>
                                <div class="account-data">MM/DD/YYYY</div>
                            </div>
                            <div class ="account-row">
                                <div class="account-data">membership type</div>
                                <div class="account-data">regular membership <span class="icon">change</span></div>
                            </div>
                            <div class ="account-row">
                                <div class="account-data">joined date</div>
                                <div class="account-data">MM/DD/YYYY</div>
                            </div>
                            <div class ="account-row">
                                <div class="account-data">Number of games</div>
                                <div class="account-data">4</div>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once APPROOT.'/view/inc/footer.php';?>