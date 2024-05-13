<!DOCTYPE html>
<html>
<head>
    <title>College of Business and Accountancy</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Include any other CSS files or stylesheets -->
    <style>
        /* Add CSS styles for centering and bold text */
        .college-heading {
            text-align: center;
            font-weight: bold;
            font-size: 30px;
            font-family: "Times New Roman", Times, serif;
        }

        /* CSS for Program Offers */
        .program-offers {
            color: black;
            margin: 20px 0;
            padding-left: 1300px; /* Adjust the left padding for the indent */
            text-align: justify;
            font-size: 20px;
            
            
        }

        .program-offers p {
            color: black;
            font-family: "Times New Roman", Times, serif;
            font-size: 24px;
            justify-content: center;
        }

        /* Adjust margin top for image in .msclogo */
        .msclogo img {
            margin-top: 150px; /* Adjust this value as needed */
            width: 200px; /* Adjust the width as needed */
            height: auto; /* Maintain aspect ratio */
        }

        /* Style for video container */
        .video-container {
            width: 50%; /* Adjust the width as needed */
            height: 11s0px; /* Adjust the height as needed */
            margin: 20px; /* Adjust the margin as needed */
            text-align: center; /* Adjust the margin top as needed */
        }

        /* Style for video */
        .video-container video {
            width: 100%; /* Make the video fill its container */
        }
    </style>


</head>
<body>
    <!-- Link back to home.php -->
    <a href="../home.php" style="position: absolute; top: 10px; left: 50%; transform: translateX(-50%);">Back to Home</a>

    <nav>
        <div class="logo" style="display: flex;align-items: center;">
            <span style="color:#01939c; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px;"><img src="../images/logomsc.png"></span>
        </div>
        <ul class="nav-links">
            <li><a href="../index.php" class="active">Home</a></li>
            <li><a href="../webpages/campusmap.php">Campus Map</a></li>
            <li><a href="../webpages/aboutus.php">About Us</a></li>
            <li><button class="login-button" href="https://www.web-leb.com/code">Login</button></li>
        </ul>
    </nav>

    <div class="search-container">
    </div>

    <!-- Image Section -->
    <div class="msclogo">
        <img src="../images/cllge-of-governance.png" alt="COLLEGE 0f Arts And Social Science">
    </div>

    <!-- Text Section -->
    <div class="two-column">
        <div class="image-column">
            <!-- Image is moved above this -->
        </div>

    <!-- Right text column -->
        <div class="text-column">
            <h2 class="college-heading">COLLEGE OF GOVERNANCE</h2>

    <!-- Video Section -->
    <div class="video-container">
        <video controls>
            <source src="../images/governance.MOV" type="video/mp4">
            <!-- Add additional source elements if needed for different video formats -->
            Your browser does not support the video tag.
        </video>
    </div>
            <div class="program-offers-box">
            <p class="program-offers"> PROGRAM OFFERS<br><br>
            Bachelor of Public Administration (BPA) (Level V AACCUP Re-accredited)<br>

            Bachelor of Science in Law Enforcement Administration (BS LEAD) (Level II AACCUP Re-accredited)<br>

            Bachelor of in Science in Political Science (BS POS) (Level II AACCUP Re-accredited)<br>

        </p>

        </div>
    </div>

    <!-- Other HTML content -->
</body>
</html>
