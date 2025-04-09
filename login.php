<?php
session_start();
include_once("login_db.php");

// Redirect to index if the user is already logged in
if (isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}

// Clear error message after displaying it
$errorMessage = '';
if (isset($_SESSION['errorMessage'])) {
    $errorMessage = $_SESSION['errorMessage'];
    unset($_SESSION['errorMessage']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    <div class="container">
        <form action="login_db.php" method="post" class="login-form">
            <div class="login-box">
            <img style="width: 30%; margin-bottom: auto; " src="https://cdn-icons-png.flaticon.com/512/1999/1999625.png" alt="Avatar">
            <h1>Welcome Back Babyboo</h1>

                <div class="input-group">
    <input type="text" name="username" placeholder="Username" required>
    <i class="fas fa-user icon"></i>
</div>

<div class="input-group">
    <input type="password" name="password" placeholder="Password" required>
    <i class="fas fa-lock icon"></i>
</div>


                <?php if (!empty($errorMessage)): ?>
                    <div class="error-message"><?= htmlspecialchars($errorMessage) ?></div>
                <?php endif; ?>

                <input type="submit" name="login" value="Login" class="btn-login">

                <div class="reg-link">
                    <span>Don't have an account?</span>
                    <a style="text-decoration: none;" href="register.php">Register Here</a>
                </div>
            </div>
        </form>
    </div>
</body>
</html>