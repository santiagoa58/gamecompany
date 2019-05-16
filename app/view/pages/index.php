<?php 
$page = 'home';
require_once APPROOT.'/view/inc/header.php';
?>
    <!-- homepage hero box -->
    <header id="landing">
        <div class="container">
            <div id="homepage-header">
                <div id="banner">
                        <h1 id="main-title"><?php echo $data['title']; ?></h1>
                        <h3 id="main-subtitle"><?php echo $data['subtitle']; ?></h3>
                </div>
                <div id="call-to-action">
                    <a href="#" class="btn btn--trial">Start 30 Day Trial</a>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- top selling games -->
        <section id="top-selling">
            <div class="container">
                <div class="section-title--wrapper">
                    <h2 class="section-title">Top Selling Games</h2>
                    <div class="dotted-underline"></div>
                </div>
                <div class="row">
                    <div class="row-item">
                        <div class="game-card">forest game 2</div>
                        <a href="#" class="btn btn--viewinfo">View Info</a>
                    </div>
                    <div class="row-item">
                        <div class="game-card">city game</div>
                        <a href="#" class="btn btn--viewinfo">View Info</a>
                    </div>
                    <div class="row-item">
                        <div class="game-card">peace game</div>
                        <a href="#" class="btn btn--viewinfo">View Info</a>
                    </div>
                    <div class="row-item">
                        <div class="game-card">war game 4</div>
                        <a href="#" class="btn btn--viewinfo">View Info</a>
                    </div>
                </div>
                <a id="more" href="gamestore/allgames.php">
                    <h4>View More</h4>
                    <div class="dotted-underline"></div>
                </a>
            </div>
        </section>

        <!-- membership -->
        <section id="membership">
            <div class="row container">
                <!-- regular membership -->
                <div class="row-item">
                    <div class="card card-membership">
                        <div class="card-membership--content">
                            <h3 class="card-membership--title">Regular Membership</h3>
                            <ul class="card-membership--description">
                                <li>
                                    <i class="icon icon--check">&#10004;</i>get up to 2 free games per month
                                </li>
                                <li>
                                    <i class="icon icon--check">&#10004;</i>get free demos of latest games
                                </li>
                            </ul>
                        </div>
                        <div class="card-membership--price">
                            <h4 class="membership-price">$9.99 <span class="membership-price__small">per month</span></h4>
                            <a href="#" class="btn btn--trial">Start 30 Day Trial</a>
                        </div>
                    </div>
                </div>
                <!-- premium membership -->
                <div class="row-item">
                    <div class="card card-membership">
                        <div class="card-membership--content">
                            <h3 class="card-membership--title">Premium Membership</h3>
                            <ul class="card-membership--description">
                                <li>
                                    <i class="icon icon--check">&#10004;</i>unlimited games per month
                                </li>
                                <li><i class="icon icon--check">&#10004;</i>early access to pre-releases</li>
                                <li>
                                    <i class="icon icon--check">&#10004;</i>invites into beta tests
                                </li>
                                <li>
                                    <i class="icon icon--check">&#10004;</i>get discounts on partner sites
                                </li>
                            </ul>
                        </div>
                        <div class="card-membership--price">
                            <h4 class="membership-price">$19.99 <span class="membership-price__small">per month</span></h4>
                            <a href="#" class="btn btn--trial">Start 30 Day Trial</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- frequently asked questions -->
        <section id="faq">
            <div class="container section-box">
                <div class="section-title--wrapper">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <div class="dotted-underline"></div>
                </div>
                <div class="container--content">
                    <ul id="faq-list">
                        <li><span class="faq-i">Q:</span> Where are my games?</li>
                        <li><span class="faq-i">A:</span> All of your games are available for download and can be found in <a href="mydashboard/mygames.php">my dashboard</a> once you are signed in.</li>

                        <li><span class="faq-i">Q:</span> How can I change my membership?</li>
                        <li><span class="faq-i">A:</span> You can upgrade or downgrade your membership by heading to <a href="mydashboard/account.php">my dashboard</a> once you are logged in.  Navigate to account info and click on the change button next to membership type.</li>

                        <li><span class="faq-i">Q:</span> Can I purchase individual games without a subscription plan?</li>
                        <li><span class="faq-i">A:</span> Yes! Once you create an account, head on over to the <a href="gamestore/latestgame.php">game store</a> and only pay for the games you want.</li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <?php require_once APPROOT.'/view/inc/footer.php';?>
