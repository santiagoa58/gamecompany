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
        <div class="nav">
            <a href="index.php" class="logo">LOGO</a>
            <ul>
                <li class="nav-current"><a href="#">HOME</a></li>
                <li class="nav-dropdown">INFORMATION <span id="icon-dropdown"></span>
                    <ul class="nav-dropdown--contents">
                        <li class=""><a href="#">About Us</a></li>
                        <li class=""><a href="#">Statistics</a></li>
                    </ul>
                </li>
                <li class=""><a href="#">GAME STORE</a></li>
                <li class=""><a href="register.php">REGISTER</a></li>
                <li class=""><a href="signin.php">SIGN IN</a></li>
                <li class=""><a href="#">START TRIAL</a></li>
            </ul>
        </div>
    </nav>

    <!-- left-nav -->
    <nav class="left-nav">
      <div class="left-nav--title">GAME STORE</div>
        <ul>
          <li class="">Latest Game</li>
          <li class="">Top Selling Games</li>
          <li class="">All Games</li>
          <li class="">DLC</li> <!--WILL NOT BE IMPLEMENTED-->
        </ul>
      </div>
    </nav>

    <main>
        <!-- gamestore dashboard-->
        <section id="gamestore">
            <div class="container">
              <!-- dynamic gamestore display area -->
              <div id="gamestore--display">
                <div class="container-box">
                  <div class="row">
                    <div class="container-box--img">
                      <img src="#" alt="game">
                      <div class="rating">****</div>
                    </div>
                    <div class="container-box--title">War Game</div>
                  </div>
                  <div class="content-box--contents">
                    <div class="contents--title">Synopsis</div>
                    <div class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                    <button class="btn">Buy Now</button>
                  </div>
                </div>
              </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="row">
            <div class="col-1-of-5">
                <ul class="footer-list">
                    <li class="footer-title">THE TEAM</li>
                    <li class="footer-contents">
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
            <div class="col-1-of-5">
                <ul class="footer-list">
                    <li class="footer-title">SERVICES</li>
                    <li class="footer-contents">
                        <ul class="footer-contents--item">
                            <li><a href="#">Free Trial</a></li>
                            <li><a href="#">Game Store</a></li>
                            <li><a href="#">Memberships</a></li>
                            <li><a href="#">Latest Game</a></li>
                            <li><a href="#">Share on Social Media</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-1-of-5">
                <ul class="footer-list">
                    <li class="footer-title">INFORMATION</li>
                    <li class="footer-contents">
                        <ul class="footer-contents--item">
                            <li><a href="#">Sales Statistics</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-1-of-5">
                <ul class="footer-list">
                    <li class="footer-title">ACCOUNT</li>
                    <li class="footer-contents">
                        <ul class="footer-contents--item">
                            <li><a href="register.php">Register</a></li>
                            <li><a href="signin.php">Sign In</a></li>
                            <li><a href="#">Account info</a></li>
                            <li><a href="#">Leaderboard</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-1-of-5">
                <div class="logo footer-logo">&copy;GameCompany</div>
            </div>
        </div>
    </footer>
</body>
</html>
