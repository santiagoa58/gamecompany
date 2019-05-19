<!-- left-nav -->

<?php if($page === "gamestore") : ?>
<nav class="left-nav">
    <div class="left-nav--title"><h3>GAME STORE</h3></div>
    <ul>
        <li class="<?php echo ($subpage == 'latestgames') ? 'left-nav--active' : ''; ?>"><a href="<?php echo $links["latestgames"]; ?>">Latest Game</a></li>

        <li class="<?php echo ($subpage == 'topselling') ? 'left-nav--active' : ''; ?>"><a href="<?php echo $links["topselling"]; ?>">Top Selling Games</a></li>

        <li class="<?php echo ($subpage == 'allgames') ? 'left-nav--active' : ''; ?>"><a href="<?php echo $links["allgames"]; ?>">All Games</a></li>
    </ul>
</nav>

<?php elseif($page === "mydashboard") : ?>
    <!-- left-nav -->
    <nav class="left-nav">
        <div class="left-nav--title"><h3><?php echo $_SESSION['username']; ?></h3></div>
        <ul>
            <li class="<?php echo ($subpage == 'mygames') ? 'left-nav--active' : ''; ?>"><a href="<?php echo $links["mygames"]; ?>">My Games</a></li>

            <li class="<?php echo ($subpage == 'leaderboard') ? 'left-nav--active' : ''; ?>"><a href="<?php echo $links["leaderboard"]; ?>">Leader<wbr>board</a></li>

            <li class="<?php echo ($subpage == 'account') ? 'left-nav--active' : ''; ?>"><a href="<?php echo $links["myaccount"]; ?>">Account Info</a></li>

            <li class="<?php echo ($subpage == 'playarea') ? 'left-nav--active' : ''; ?>"><a href="<?php echo $links["playarea"]; ?>">Play Area</a></li>
        </ul>
    </nav>
    
<?php elseif($page === "statistics") : ?>
    <!-- left-nav -->
    <nav class="left-nav">
        <div class="left-nav--title"><h3>Statistics</h3></div>
        <ul>
            <li class="<?php echo ($subpage == 'graphs') ? 'left-nav--active' : ''; ?>"><a href="<?php echo $links["graphs"]; ?>">Graphs</a></li>
        </ul>
    </nav>

<?php else :?>
    <nav class="left-nav">
        <div class="left-nav--title"><h3>Coming Soon</h3></div>
        <ul>
        </ul>
    </nav>
    
<?php endif; ?>