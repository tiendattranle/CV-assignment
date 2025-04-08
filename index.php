<?php
include_once("login_db.php");

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<?php @include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="Navigation_bar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="main-content">
        <!-- Home section now contains welcome content -->
        <section class="home" style="background-image: url('images/contact.jpg'); background-size: cover;">
            <div class="container">
                <h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
                <p>Create or update your CV with ease.</p>
                <a href="template.php" class="btn">Create My CV</a>
            </div>
        </section>

        <!-- Features section -->
        <section class="features">
            <div class="container">
                <div class="feature-row" style="display: flex; gap: 80px;">
                    <div class="feature-item">
                        <i class="fas fa-pencil-alt"></i>
                        <!-- Removed marquee as it was commented out -->
                        <p>Start building your CV today!</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php @include 'footer.php'; ?>
</body>
</html>