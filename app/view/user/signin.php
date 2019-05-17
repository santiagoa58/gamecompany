<?php 
$page = 'signin';
require_once APPROOT.'/view/inc/header.php';
?>
    <main>
        <!-- sign in -->
        <section class="first-section">
            <div class="container section-box">
                <h2 class="section-title"><?php echo $data["title"]; ?></h2>
                <form action="#" method="post">
                    <div class="input-container">
                        <label for="user">Username</label>
                        <input type="text" name="user" placeholder="username" class="input-field__white">
                    </div>
                    <div class="input-container">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="input-field__white">
                    </div>
                    <input class="btn btn--submit" type="submit" value="Sign In">
                </form>
                <div class="signin-register">
                    Don't have an account? <a href="<?php echo $links["register"];?>">Register</a>
                </div>
            </div>
        </section>
    </main>

    <?php require_once APPROOT.'/view/inc/footer.php';?>
