<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Creation and Hosting</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header style="position: fixed; width: 100%; top: 0; z-index: 1000;">
        <nav class="navbar">
            <div class="logo"><a href="index.php">CV</a></div>
            <ul id="navbar" class="nav-links">
                <li class="lists"><a class="options" href="index.php">Home</a></li>
                <li class="lists">
                    <select class="cv-dropdown" onchange="if (this.value) window.location.href = this.value;">
                        <option value="" disabled selected>CV</option>
                        <option value="demo.php">My CV</option>
                        <option value="Update_CV.php">Update CV</option>
                        <option value="create_cv.php">Create New CV</option>
                    </select>
                </li>
                <li class="lists"><a class="options" href="template.php">Templates</a></li>
                <li class="lists"><a class="options" href="#">Contact</a></li>
                <li id="log_list">
                    <?php if (isset($_SESSION['username'])): ?>
                        <a id="log_option" href="logout.php" class="btn">
                            <?php echo htmlspecialchars($_SESSION['username']) . " Logout"; ?>
                        </a>
                    <?php else: ?>
                        <a id="log_option" href="logout.php" class="btn">Login</a>
                    <?php endif; ?>
                </li>
            </ul>
            <button class="menu-toggle">&#9776;</button>
        </nav>
    </header>
</body>
</html>