<!DOCTYPE html>
<html>
<head>
    <title>My CV</title>
    <link rel="stylesheet" type="text/css" href="Navigation_bar.css">
    <link rel="stylesheet" type="text/css" href="CV.css">
    <meta name="viewport" content="width=device-width initial-scale=1">
</head>
<body>
    <!-- Include the header.php file -->


    <div id="container">
        <div id="left-div">
            <img src="images/default-image.jpg" class="left-top-image"><br>
            <div id="left-middle-div">
                <h2 id="name">John Doe</h2>
                <p><img src="Image/home-logo.png" class="left-logo">123 Main Street, City, Country</p>
                <p><img src="Image/phone-logo.png" class="left-logo">+123 456 789</p>
                <p><img src="Image/email-logo.png" id="email-logo">john.doe@example.com</p>
            </div><br>
            <div id="left-bottom-div">
                <h2 id="skills"><img src="Image/skills-logo.png" id="skills-logo"> Skills</h2>
                <p id="skills-dtl">Java, PHP, HTML, CSS, JavaScript</p>
            </div>
            <div id="left-bottom-languages-div">
                <h2 id="skills"><img src="Image/language-logo.png" id="language-logo"> Languages</h2>
                <p id="skills-dtl">English, Spanish</p>
            </div>
        </div>

        <div id="right-div">
            <div id="right-top-div">
                <h1><img src="Image/working-logo.png" class="right-logo"> Work Experience</h1>
                <h2 id="name-institute">ABC Corporation</h2>
                <h5 class="description">Software Developer</h5>
                <p class="description">January 2020 - Present</p>
                <!-- <a href="Delete_info.php" class="description" name="deletew" onClick="return confirm('Are you sure you want to delete?')">Delete</a> -->
            </div><br>

            <div id="right-bottom-div">
                <h1><img src="Image/cap-logo.png" class="right-logo"> Education</h1>
                <div id="varsity-div">
                    <h2 id="name-institute">XYZ University</h2>
                    <h4 class="description">CGPA: 3.8</h4>
                    <h5 class="description">Graduated: 2021</h5>
                </div><br>

                <div id="college-div">
                    <h2 id="name-institute">ABC College</h2>
                    <h4 class="description">GPA: 3.6</h4>
                    <h5 class="description">Graduated: 2017</h5>
                </div><br>

                <div id="school-div">
                    <h2 id="name-institute">XYZ High School</h2>
                    <h4 class="description">GPA: 3.9</h4>
                    <h5 class="description">Graduated: 2014</h5>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2018 - RM</p>
    </footer>
</body>
</html>
