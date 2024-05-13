
<!DOCTYPE html>
<html>
<head>
    <title>MARINDUE STATE COLLEGE</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        /* Additional CSS for arranging items into 3 rows */
        .course-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
           
            grid-gap: 30px;
        }
        .course-item {
            text-align: center;

        }
    </style>
</head>
<body>
     <nav>
        <div class="logo" style="display: flex;align-items: center;">
         <span style="color:#01939c; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px;"><img src="images/logomsc.png"></span>

        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="webpages/campusmap.php">Campus Map</a></li>
            <li><a href="webpages/aboutus.php">About Us</a></li>
            <li><button class="login-button" href="https://www.web-leb.com/code">Login</button></li>
            <ul class="nav-links">
        </ul>
    </nav>
    <div class="search-container">
        <form action="/search" method="GET">
            <input type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- Title under the search bar -->
    <h1 style="margin-top: 100px;">PROGRAM OFFERS</h1>
    <div class="COURSES">
        <ul class="course-list">
            <li>
                <div class="course-item">
                    <a href="webpages/businessadd.php">
                     <img src="images/cllge-cab.png" alt="COLLEGE of BUSINESS AND ACCOUNTANCY">
                    </a>
                <span>COLLEGE OF BUSINESS AND ACCOUNTANCY</span>
                </div>
            </li>
            <li>
                <div class="course-item">
                    <a href="webpages/artsandsocialscience.php">
                    <img src="images/cllge-CASS.png" alt="COLLEGE OF ARTS AND SOCIAL SCIENCES">
                    <span>COLLEGE OF ARTS AND SOCIAL SCIENCES</span>
                </div>
            </li>
            <li>
                <div class="course-item">
                    <a href="webpages/alliedhealth.php">
                    <img src="images/cllge-cahs.png" alt="COLLEGE OF ALLIED HEALTH SCIENCES">
                    <span>COLLEGE OF ALLIED HEALTH SCIENCES</span>
                </div>
            </li>
            <li>
                <div class="course-item">
                    <a href="webpages/ces.php">
                    <img src="images/cllge-ces.png" alt="COLLEGE OF ENVIRONMENTAL STUDIES">
                    <span>COLLEGE OF ENVIRONMENTAL STUDIES</span>
                </div>
            </li>
            <li>
                <div class="course-item">
                    <a href="webpages/cics.php">
                    <img src="images/cllge-cics.png" alt="COLLEGE OF INFORMATION AND COMPUTING SCIENCES">
                    <span>COLLEGE OF INFORMATION AND COMPUTING SCIENCES</span>
                </div>
            </li>
            <li>
                <div class="course-item">
                    <a href="webpages/cit.php">
                    <img src="images/cllge-cIT.png" alt="COLLEGE OF INDUSTRIALTECHNOLOGY">
                    <span>COLLEGE OF INDUSTRIAL TECHNOLOGY</span>
                </div>
            </li>
            <li>
                <div class="course-item">
                    <a href="webpages/educ.php">
                    <img src="images/cllge-of-education.png" alt="COLLEGE OF EDUCATION">
                    <span>COLLEGE OF EDUCATION</span>
                </div>
            </li>
            <li>
                <div class="course-item">
                    <a href="webpages/ce.php">
                    <img src="images/cllge-of-engineering.png" alt="COLLEGE OF ENGINEERING">
                    <span>COLLEGE OF ENGINEERING</span>
                </div>
            </li>
            <li>
                <div class="course-item">
                    <a href="webpages/gov.php">
                    <img src="images/cllge-of-governance.png" alt="COLLEGE OF GOVERNANCE">
                    <span>COLLEGE OF GOVERNANCE</span>
                </div>
            </li>
            <!-- Your existing course items -->
        </ul>
    </div>


</body>
</html>