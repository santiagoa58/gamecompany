<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameCompany - Premium Membership</title>
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
                <li class=""><a href="index.php">HOME</a></li>
                <li class="nav-dropdown">INFORMATION
                    <ul class="nav-dropdown--contents">
                        <li class=""><a href="aboutus.php">About Us</a></li>
                        <li class=""><a href="#">Statistics</a></li>
                    </ul>
                </li>
                <li class=""><a href="gamestore/latestgame.php">GAME STORE</a></li>
                <li class=""><a href="register.php">REGISTER</a></li>
                <li class=""><a href="signin.php">SIGN IN</a></li>
                <li class=""><a href="#">START TRIAL</a></li>
            </ul>
        </div>
    </nav>

    <main>
        <!-- Premium Membership -->
        <section class="first-section">     
            <div class="container section-box">
                <div>
                    <h2>Premium Membership</h2>
                    <h4 class="membership-price__alt">$19.99 <span class="membership-price__small">per month</span>
                    </h4>
                </div>
                <div class="row membership--description">
                    <div class="row-item">
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
                </div>
                    
                <form action="#" class="membership-form">
                    <div class="row">
                        <div class="row-item">         
                            <h4>Debit/Credit Card Info</h4>
                            <div class="input-container">
                                <label for="cardnumber">Card number</label>
                                <input type="text" name="cardnumber" placeholder="12345678912345678" class="input-field__white">
                            </div>
                            <div class="input-container input-container__tiny">
                                <label for="expmonth">Expiry month</label>
                                <input type="text" name="expmonth" placeholder="MM" class="">
                            </div>
                            <div class="input-container input-container__tiny">
                                <label for="expyear">Expiry year</label>
                                <input type="text" name="expyear" placeholder="YYYY" class="">
                            </div>
                            <div class="input-container input-container__tiny">
                                <label for="cvv">CVV</label>
                                <input type="text" name="cvv" placeholder="123" class="">
                            </div>

                            <div class="input-container">
                                <label for="cardname">Name On Card</label>
                                <input type="text" name="cardname" placeholder="John Doe" class="input-field__white">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="row-item">         
                            <input type="button" value="Start 30 Day Trial" class="btn btn--trial">
                            <h4 class="or-buffer">OR</h4>      
                            <a href="regularmember.php" class="btn btn__alt btn__alt--member">Regular Membership</a>  
                        </div>
                    </div>
                </form>  
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
