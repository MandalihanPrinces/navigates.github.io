
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
           
            grid-gap: 30px;x
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
           <li><button class="login-button" onclick="window.location.href='register.php'">Login</button></li>
            <li>
                <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <a href="searchbar,php" onclick="search()">
        <button onclick="search()">Search</button>
                </div>
            </li>
 
        </ul>
    </nav>
    <!-- Title under the search bar -->
    
    <div class="msclogo">
        <img src="./images/logomsc.png">
    </div>
    <h1 style="margin-top: 100px;"> WELCOME TO MARINDUQUE STATE COLLEGE</h1>
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
    <div>
            <h1 style="margin-top: 100px;"> About Us</h1>

    </div>
    <div class="wrapper">
    <div class="column">
        <h1>MARINDUQUE STATE COLLEGE: A BRIEF HISTORY</h1>
        <div class="president-info">
            <img src="../images/diosdado.jpg" alt="Prof.Diosdado P. Zulueta, DPA">
            <span>Prof.Diosdado P. Zulueta, DPA<br>President</span>
        </div>
    </div>
    <div class="column">
        <div class="content-container">
            <h2>Vision</h2>
            <p>An advanced and adaptive university pursuing quality education, lifelong gender-sensitive learning environment, responsive research-based community programs, and transparent governance with sustainable resource generation by 2025.</p>

            <h2>Mission</h2>
            <p>The mission of Marinduque State College is to provide advanced education, higher technological and professional instruction and training in various fields of study. The college aims to empower God-fearing individuals who are innovators and protectors for the sustainable development of the province and the country. The college also strives to provide excellence in instruction, research, extension, and production that magnifies W.I.S.D.O.M. in leadership. W.I.S.D.O.M. stands for Wisdom, Integrity, Service, Discipline, Order, and Morality.</p>

            <h2>History</h2>
            <p>Republic Act No. 805, Approved, June 21, 1953, Approved by Congressman Panfilo M. Manguera, Signed into Law by President Elpidio Quirino An act to establish, organize and maintain one National High School of Arts and Trades in the Municipality of Boac, province of Marinduque, to be known as the Marinduque School of Arts and Trades and to authorize the appropriation of funds for the purpose.</p>

            <p>Republic Act No. 377, Approved, April 8, 1983, Approved by: Assemblywoman Carmencita O. Reyes, Signed into Law by: President Ferdinand E. Marcos An act converting the Marinduque School of Arts and Trades into the Marinduque Institute of Science and Technology, broadening for the purpose its curricular programs in Science and Technology.</p>

            <p>Republic Act No. 6833, Approved, January 5, 1990, Authored by Congresswoman Carmencita O. Reyes, Signed into Law: President Corazon C. Aquino An act changing the name of the Marinduque Institute of Science and Technology in Barangay Tanza, Municipality of Boac, province of Marinduque to Marinduque State College.</p>

            <p>Republic Act No. 7319, Approved, March 30, 1992, Authored by Congresswoman Carmencita O. Reyes', Signed into Law: President Corazon C. Aquino An act establishing the College of Agriculture in Barangay Poctoy, Municipality of Torrijos; the college of Fisheries in Baranggay Pinggan, Municipality of Gasan; and the Marinduque Community College in the Municipality of Sta. Cruz, all in the province of Marinduque as branches of the Marinduque State College, Boac, Marinduque.</p>
        </div>
    </div>
</div>

    <div class="map_main">
                     <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1940.1655755879638!2d121.8376036662535!3d13.453672900775661!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a327b4112f0c4d%3A0x2f14f918f6027d99!2sCindy&#39;s%20Cafe!5e0!3m2!1sen!2sph!4v1685092486293!5m2!1sen!2sph" width="250" height="500" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
</body>
</html>





           
