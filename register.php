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
        <h1>Sign up</h1>
        <form action = "" method="POST">
            <input type="text" id="fullname" placeholder="Full Name">
            <input type="email" id="email" placeholder="Email">
            <input type="password" id="password" placeholder="Password">
            <input type="password" id="cfmpassword" placeholder="Confirm Password">
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
<html>