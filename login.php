<?php
    //mysqli_connect('localhost', 'root', 'password', 'tenDB');
    //mysqli_set_charset($connect, "utf8");
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="device-width initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div id="signupbox">
        <h1>Login</h1>
        <form action = "" method="POST">
            <input type="email" id="email" placeholder="Email">
            <input type="password" id="password" placeholder="Password">
            <br>
            <div id="login-option">
                <a href="">Create account</a>
                <a href="">Forgot password?</a>
            </div>
            <br>
            <a href=""><img src="images/google-logo.png"></a>
            <br>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
<html></html>