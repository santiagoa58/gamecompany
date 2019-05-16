<!-- navigation -->        
<nav class="nav__sticky">
    <input type="checkbox" class="nav--checkbox" id="nav-toggle">
    <label for="nav-toggle" class="nav--button">
        <span class="nav--icon">&nbsp;</span>
    </label>
    <div class="nav">
        <a href="<?php echo URLROOT; ?>" class="logo">LOGO</a>
        <ul id="nav-list">
            <li class="<?php echo ($page == 'home') ? 'nav-current' : ''; ?>">
                <a href="<?php echo URLROOT; ?>">HOME</a>
            </li>
            <li class="nav-dropdown">INFORMATION
                <ul class="nav-dropdown--contents">
                    <li class="<?php echo ($page == 'aboutus') ? 'nav-current' : ''; ?>">
                        <a href="<?php echo URLROOT; ?>/Pages/AboutUs">About Us</a>
                    </li>
                    <li class="<?php echo ($page == 'statistics') ? 'nav-current' : ''; ?>">
                        <a href="<?php echo URLROOT; ?>/Statistics/">Statistics</a>
                    </li>
                </ul>
            </li>
            <li class="<?php echo ($page == 'gamestore') ? 'nav-current' : ''; ?>">
                <a href="<?php echo URLROOT; ?>/Gamestore/latestgame">GAME STORE</a>
            </li>
            <?php if(isset($_SESSION["user_id"])) : ?>                
                <li class="<?php echo ($page == 'mydashboard') ? 'nav-current' : ''; ?>">
                    <a href="<?php echo URLROOT; ?>/MyDashboard/">MY Dashboard</a>
                </li>

                <?php else : ?>
                <li class="<?php echo ($page == 'register') ? 'nav-current' : ''; ?>">
                    <a href="<?php echo URLROOT; ?>/User/register">REGISTER</a>
                </li>
                <li class="<?php echo ($page == 'signin') ? 'nav-current' : ''; ?>">
                    <a href="<?php echo URLROOT; ?>/User/signin">SIGN IN</a>
                </li>
            <?php endif; ?>
            <li class="<?php echo ($page == 'membership') ? 'nav-current' : ''; ?>">
                <a href="<?php echo URLROOT; ?>/Membership/premiummember">START TRIAL</a>
            </li>
        </ul>
    </div>
</nav>