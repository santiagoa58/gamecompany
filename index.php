<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameCompany - Home</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,400,700|Roboto:400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- navigation -->        
    <nav class="nav__sticky">
		<input type="checkbox" class="nav--checkbox" id="nav-toggle">
		<label for="nav-toggle" class="nav--button">
			<span class="nav--icon">&nbsp;</span>
		</label>
        <div class="nav">
            <a href="index.php" class="logo">LOGO</a>
            <ul id="nav-list">
                <li class="nav-current"><a href="#">HOME</a></li>
                <li class="nav-dropdown">INFORMATION
                    <ul class="nav-dropdown--contents">
                        <li class=""><a href="aboutus.php">About Us</a></li>
                        <li class=""><a href="#">Statistics</a></li>
                    </ul>
                </li>
                <li class=""><a href="gamestore/latestgame.php">GAME STORE</a></li>
                <li class=""><a href="register.php">REGISTER</a></li>
                <li class=""><a href="signin.php">SIGN IN</a></li>
                <li class=""><a href="premiummember.php">START TRIAL</a></li>
            </ul>
        </div>
    </nav>

    <!-- homepage hero box -->
    <header id="landing">
        <div class="container">
            <div id="homepage-header">
                <div id="banner">
                        <h1 id="main-title">Game Company</h1>
                        <h3 id="main-subtitle">Get our newly released <span id="latest-game">Game Name</span> today!</h3>
                </div>
                <div id="call-to-action">
                    <button class="btn btn--trial">Start 30 Day Trial</button>
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
                        <button class="btn btn--viewinfo">View Info</button>
                    </div>
                    <div class="row-item">
                        <div class="game-card">city game</div>
                        <button class="btn btn--viewinfo">View Info</button>
                    </div>
                    <div class="row-item">
                        <div class="game-card">peace game</div>
                        <button class="btn btn--viewinfo">View Info</button>
                    </div>
                    <div class="row-item">
                        <div class="game-card">war game 4</div>
                        <button class="btn btn--viewinfo">View Info</button>
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
                            <button class="btn btn--trial">Start 30 Day Trial</button>
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
                            <button class="btn btn--trial">Start 30 Day Trial</button>
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
    <footer>
        <div class="row container">
            <div class="row-item">
                <ul class="footer-list">
                    <li>THE TEAM</li>
                    <li>
                        <ul class="footer-contents--item">
                            <li>Team Member 1</li>
                            <li>Team Member 2</li>
                            <li>Team Member 3</li>
                            <li>Team Member 4</li>
                            <li>Team Member 5</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="row-item">
                <ul class="footer-list">
                    <li>SERVICES</li>
                    <li>
                        <ul class="footer-contents--item">
                            <li><a href="gamestore/allgames.php">Game Store</a></li>
                            <li><a href="premiummember.php">Memberships</a></li>
                            <li><a href="gamestore/latestgame.php">Latest Game</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="row-item">
                <ul class="footer-list">
                    <li>INFORMATION</li>
                    <li>
                        <ul class="footer-contents--item">
                            <li><a href="#">Sales Statistics</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="row-item">
                <ul class="footer-list">
                    <li>ACCOUNT</li>
                    <li>
                        <ul class="footer-contents--item">
                            <li><a href="register.php">Register</a></li>
                            <li><a href="signin.php">Sign In</a></li>
                            <li><a href="mydashboard/account.php">Account info</a></li>
                            <li><a href="mydashboard/leaderboard.php">Leaderboard</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="row-item">
                <div class="logo footer-logo">&copy;GameCompany</div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
</body>
</html>
