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
            padding-left: 1100px; /* Adjust the left padding for the indent */
            text-align: justify;
            font-size: 20px;
            margin: auto;
            align-items: right;
            
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
        <img src="../images/cllge-cab.png" alt="COLLEGE of BUSINESS AND ACCOUNTANCY">
    </div>


    <!-- Text Section -->
    <div class="two-column">
        <div class="image-column">
            <!-- Image is moved above this -->
        </div>

        <!-- Right text column -->
        <div class="text-column">
            <h2 class="college-heading">COLLEGE OF BUSINESS AND ACCOUNTANCY</h2>

        <!-- Video Section -->
    <div style="display:flex; gap:2rem; margin: 4rem;">
        <video controls style="width: 40%; height: 20rem;">
            <source src="../images/businessadd.MOV" type="video/mp4">
            <!-- Add additional source elements if needed for different video formats -->
            Your browser does not support the video tag.
        </video>
        <p style="color:blue; width: 60%; text-align: center;"> PROGRAM OFFERS
            Bachelor Of Science In Accountancy
            Bachelor of Science in Accounting in Information System
            (AACCUP Level 2 RE-Accredated)
            Human Resource Management (HRM)
            Marketing Management (MM)
            Financial Management (FM)
            Bachelor of Science in Tourism Management
             (AACCUP Level 3 RE-Accredated)
            Bachelor of Sciences in Entrepreneurship major in: 
            (AACCUP Level 3 RE-Accredated)
            Enterprise Management
            Agriculture Management
            Whole Sale And Retail

        </p>
    </div>
        <form action="MAILTO:www.mandalihanprinces1@gmial.com">
            <input type="text" name="email" placeholder="Add comment?" style="color: black;">
            <button type="submit" style="color: blue;">Send</button>
        </form>
    </div>

    <!-- Other HTML content -->
</body>
</html>
