<?php 
$page = 'register';
require_once APPROOT.'/view/inc/header.php';
?>
    <main>
        <!-- register -->
        <section id="register" class="first-section">
            <div class="container section-box">
                <h2 class="section-title"><?php echo $data["title"];?></h2>
                <form action="#" method="post">
                    <div class="row">
                        <div class="row-item">
                            <div class="input-container">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" placeholder="John" class="input-field__white">
                            </div>

                            <div class="input-container">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" placeholder="Doe" class="input-field__white">
                            </div>

                            <div class="input-container">
                                <label for="dob">Date Of Birth</label>
                                <input type="date" name="dob" class="input-field__white">
                            </div>
                        </div>
                        <div class="row-item">
                            <div class="input-container">
                                <label for="user">Username</label>
                                <input type="text" name="user" placeholder="username" class="input-field__white">
                            </div>

                            <div class="input-container">
                                <label for="email">Email</label>
                                <input type="email" name="email" placeholder="email@example.com" class="input-field__white">
                            </div>

                            <div class="input-container">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="input-field__white">
                            </div>

                            <div class="input-container">
                                <label for="conf-password">Confirm Password</label>
                                <input type="password" name="conf-password" class="input-field__white">
                            </div>
                        </div>
                    </div>
                    <input class="btn btn--submit" type="submit" value="Register">
                </form>
                <div class="signin-register">
                    Have an account? <a href="<?php echo $links["signin"];?>">Sign In</a>
                </div>
            </div>
        </section>
    </main>

    <?php require_once APPROOT.'/view/inc/footer.php';?>