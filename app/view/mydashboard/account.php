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
                        <div class ="table-row">
                            <div class="row">
                                <div class="row-item">
                                    <div class="table-data">username</div>
                                    <div class="table-data">username</div>
                                </div>
                            <!-- <button class="btn btn__alt btn__alt--member">edit</button> -->
                            </div>
                        </div>
                        <div class ="table-row">
                            <div class="row">
                                <div class="row-item">
                                    <div class="table-data">email</div>
                                    <div class="table-data">example@email.com</div>
                                </div>
                                <!-- <button class="btn btn__alt btn__alt--member">edit</button> -->
                            </div>
                        </div>
                        <div class ="table-row">
                            <div class="row">
                                <div class="row-item">
                                    <div class="table-data">full name</div>
                                    <div class="table-data">John Doe</div>
                                </div>
                                <!-- <button class="btn btn__alt btn__alt--member">edit</button> -->
                            </div>
                        </div>
                        <div class ="table-row">
                            <div class="row">
                                <div class="row-item">
                                    <div class="table-data">password</div>
                                    <div class="table-data"><span class="password-symbol">&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;</span></div>
                                </div>
                                <!-- <button class="btn btn__alt btn__alt--member">edit</button> -->
                            </div>
                        </div>
                        <div class ="table-row">
                            <div class="row">
                                <div class="table-data">birthday</div>
                                <div class="table-data">MM/DD/YYYY</div>
                            </div>
                        </div>
                        <div class ="table-row">
                            <div class="row">
                                <div class="row-item">
                                    <div class="table-data">membership type</div>
                                    <div class="table-data">regular membership</div>
                                </div>
                                <!-- <button class="btn btn__alt btn__alt--member">change</button> -->
                            </div>
                        </div>
                        <div class ="table-row">
                            <div class="row">
                                    <div class="table-data">joined date</div>
                                    <div class="table-data">MM/DD/YYYY</div>
                            </div>
                        </div>
                        <div class ="table-row">
                            <div class="row">
                                <div class="table-data">Number of games</div>
                                <div class="table-data">4</div>
                            </div>
                        </div>
                    </div>                        
                </div>
            </div>
        </div>
    </section>
</main>
    
    <?php require_once APPROOT.'/view/inc/footer.php';?>