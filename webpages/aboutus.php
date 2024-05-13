<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARINDUE STATE COLLEGE</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!-- Add your custom CSS styles for enhanced design -->
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .menu-bar {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        .menu-bar ul {
            list-style-type: none;
            padding: 0;
        }
        .menu-bar ul li {
            display: inline;
            margin-right: 20px;
        }
        .menu-bar ul li a {
            color: #fff;
            text-decoration: none;
        }
        .menu-bar ul li a:hover {
            color: #ffd700; /* Change color on hover */
        }
        .search-container {
            text-align: center;
            margin-top: 20px;
        }
        .wrapper {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: green;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }
        .president-info {
            text-align: center;
            margin-top: 25px;
        }
        .president-info img {
            width: 150px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .president-info span {
            font-weight: bold;
        }
        .content-container {
            margin-top: 20px;
        }
        h1, h2 {
            color: #333;
        }
        p {
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <nav>
        <div class="logo" style="display: flex;align-items: center;">
         <span style="color:#01939c; font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px;"><img src="../images/logomsc.png"></span>

        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../webpages/campusmap.php">Campus Map</a></li>
            <li><a href="webpages/aboutus.php"  class="active">About Us</a></li>
             <li>
                <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <button onclick="search()">Search</button>
    </div>
            </li>
        </ul>
    </nav>
    <ul>
    </div>
    <div class="search-container">
        <form action="/search" method="GET">
            <input type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- Title under the search bar -->
    <div class="wrapper">
        <h1>MARINDUQUE STATE COLLEGE: A BRIEF HISTORY</h1>
        <div class="president-info">
            <img src="../images/diosdado.jpg" alt="Prof.Diosdado P. Zulueta, DPA">
            <span>Prof.Diosdado P. Zulueta, DPA<br>President</span>
        </div>
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
</body>
</html>
