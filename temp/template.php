<?php @include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Templates</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main class="main-content">
        <section class="templates">
            <div class="container">
                <h1>Choose Your Template</h1>
                <p>Select a template to start creating your CV.</p>
                <div class="template-grid">
                    <div class="template-item">
                        <img src="images/template1.png" alt="Template 1">
                        <a href="template1.php" class="btn">Use Template 1</a>
                    </div>
                    <div class="template-item">
                        <img src="images/template2.png" alt="Template 2">
                        <a href="template2.php" class="btn">Use Template 2</a>
                    </div>
                    <div class="template-item">
                        <img src="images/template3.png" alt="Template 3">
                        <a href="template3.php" class="btn">Use Template 3</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php @include 'footer.php'; ?>
</body>
</html>