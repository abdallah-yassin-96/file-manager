<?php require('header.php'); ?>


<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $usersJson = file_get_contents("classes/UsersData.json");
    $usersArray = json_decode($usersJson);

    foreach ($usersArray as $key => $user) {
        if ($email == $user->email && password_verify($password, $user->password)) {
            $_SESSION['user'] = $user;
            header('location: dashboard.php');
        }
    }

    echo '<script>alert(\'wrong email or password!\')</script>';
}
?>

<div class="container pt-5 pb-5 d-flex align-items-center">
    <div class="login-container d-flex">
        <div class="left-column d-flex flex-column">
            <div>
                <h1 class="mb-4">Sign In</h1>
                <p>Sign In with your username and password.</p>
            </div>
            <div>
                <h1 class="mb-4">Sign Up</h1>
                <p>Sign Up with your simple details, it will be cross checked by the adminstrator.</p>
            </div>
        </div>
        <div class="right-column">
            <form action="" method="POST">
                <div class="form-field">
                    <label for="firstName">Username</label>
                    <input type="email" name="email" id="login-email" placeholder="example@fx.com" required>
                </div>
                <div class="form-field">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="**********" required>
                </div>
                <input type="submit" name="submit" value="Login">
                <span>or</span>
                <a href="index.php" class="login-link">Sign Up</a>
            </form>
        </div>
    </div>
</div>


<?php require('footer.php'); ?>