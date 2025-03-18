<?php @include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="main-content">
        <section class="home">
            <div class="container">
                <h1>ye</h1>
                <p>Cham ngon.</p>
                <a href="create-cv.php" class="btn">Create my CV</a>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2>Features</h2>
                <div class="feature-item">
                    <i class="fas fa-pencil-alt"></i>
                    <h3>Easy to Use</h3>
                    <p>Create your CV with our user-friendly interface.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-cloud-upload-alt"></i>
                    <h3>Host Online</h3>
                    <p>Host your CV online and share it with a unique link.</p>
                </div>
                <div class="feature-item">
                    <i class="fas fa-file-alt"></i>
                    <h3>Multiple Templates</h3>
                    <p>Choose from a variety of professional templates.</p>
                </div>
            </div>
        </section>
    </main>

    <?php @include 'footer.php'; ?>
</body>
</html>