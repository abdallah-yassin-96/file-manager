<?php
require('header.php');
require_once('classes/UsersDB.php');
?>

<?php

?>

<div class="container pt-5 pb-5 d-flex align-items-center">
    <div class="signup-container d-flex">
        <div class="left-column d-flex flex-column">
            <div>
                <h1 class="mb-4">Sign Up</h1>
                <p>Sign Up with your simple details, it will be cross checked by the adminstrator.</p>
            </div>
            <div>
                <h1 class="mb-4">Sign In</h1>
                <p>Sign In with your username and password.</p>
            </div>
        </div>
        <div class="right-column">
            <form action="classes/UsersDB.php" method="POST">
                <div class="form-field">
                    <label for="firstName">First Name</label>
                    <input type="text" name="firstName" id="firstName" placeholder="John" required>
                </div>
                <div class="form-field">
                    <label for="lastName">Last Name</label>
                    <input type="text" name="lastName" id="lastName" placeholder="Doe" required>
                </div>
                <div class="form-field">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" placeholder="example@fx.com" required>
                </div>
                <div class="form-field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="**********" required>
                </div>
                <div class="terms-and-conditions d-flex">
                    <input type="checkbox" name="terms_and_conditions" id="terms_and_conditions">
                    <p>I agree with the terms and conditions</p>
                </div>
                <input type="submit" name="submit" value="Submit">
                <span>or</span>
                <a href="login.php" class="login-link">Login</a>
            </form>
        </div>
    </div>
</div>

<?php require('footer.php'); ?>