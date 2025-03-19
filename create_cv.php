<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Resume Builder</title>
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            display: flex;
            gap: 20px;
        }
        .container {
            display: flex;
            width: 100%;
        }
        .form-container, .preview-container {
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
        }
        textarea, input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
        }
        h2 {
            text-align: center;
        }
        .section h3 {
            border-bottom: 1px solid black;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <!-- Left Side: Form -->
    <div class="form-container">
        <h2>Enter Your Details</h2>
        <form id="resumeForm">
            <label>Full Name:</label><br>
            <input type="text" id="name" required><br><br>

            <label>Email:</label><br>
            <input type="email" id="email" required><br><br>

            <label>Phone:</label><br>
            <input type="text" id="phone" required><br><br>

            <label>Education:</label><br>
            <textarea id="education" required></textarea><br><br>

            <label>Experience:</label><br>
            <textarea id="experience" required></textarea><br><br>

            <label>Skills:</label><br>
            <textarea id="skills" required></textarea><br><br>

            <button type="submit" formaction="preview.php">Generate PDF</button>
        </form>
    </div>

    <!-- Right Side: Resume Preview -->
    <div class="preview-container">
        <h2 id="previewName">Your Name</h2>
        <p><strong>Email:</strong> <span id="previewEmail">your.email@example.com</span></p>
        <p><strong>Phone:</strong> <span id="previewPhone">123-456-7890</span></p>

        <div class="section">
            <h3>Education</h3>
            <p id="previewEducation">Enter your education here...</p>
        </div>

        <div class="section">
            <h3>Experience</h3>
            <p id="previewExperience">Enter your experience here...</p>
        </div>

        <div class="section">
            <h3>Skills</h3>
            <p id="previewSkills">Enter your skills here...</p>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll("input, textarea").forEach(input => {
        input.addEventListener("input", function() {
            let targetId = "preview" + this.id.charAt(0).toUpperCase() + this.id.slice(1);
            document.getElementById(targetId).innerHTML = this.value ? this.value.replace(/\n/g, "<br>") : "Enter your " + this.id + " here...";
        });
    });
</script>

</body>
</html>
