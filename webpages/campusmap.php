<!DOCTYPE html>
<html>
<head>
<title>MARINDUE STATE COLLEGE</title>
<link rel="stylesheet"  type="text/css" href="../css/style.css">
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
            <li><a href="../webpages/campusmap.php" class="active">Campus Map</a></li>
            <li><a href="../webpages/aboutus.php" >About Us</a></li>
            <li>
                <div class="search-container">
        <input type="text" id="searchInput" placeholder="Search...">
        <button onclick="search()">Search</button>
    </div>
            </li>
        </ul>
    </nav>
    <div class="search-container">
        <form action="/search" method="GET">
            <input type="text" placeholder="Search..." name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- Title under the search bar -->
    <h1>CAMPUS MAP</h1>


    </div>
   <div>
     <h1 style="margin-top: 100px;">CAMPUS MAP OF MARINDUQUE STATE COLLEGE</h1>
    <div class="map_main">
                     <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1649.6431822584134!2d121.84441405350078!3d13.45423121348153!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a3264c40e0104b%3A0xf06fb8b6db2af6ba!2sMarinduque%20State%20College!5e1!3m2!1sen!2sph!4v1715489814813!5m2!1sen!2sph"width="250" height="500" style="border:0; width:100%" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
    <footer class="footermarinduque" style="background-color: #f0f0f0; padding: 20px;">
        <div style="text-align: center;">
            <img src="../images/logomsc.png" alt="Marinduque State College Logo" style="width: 100px; height: auto; margin-bottom: 10px;">
        </div>
        <p style="text-align: center; font-family: Arial, sans-serif; font-size: 14px; color: #333;">&copy; 2024 Marinduque State College</p>
        <p style="text-align: center; font-family: Arial, sans-serif; font-size: 14px; color: #333;">Panfilo M. Manguera, Sr. Road, Tanza, Boac, Marinduque</p>
        <p style="text-align: center; font-family: Arial, sans-serif; font-size: 14px; color: #333;">Tel No. (042) 332-2-20/2728</p>
        <p style="text-align: center; font-family: Arial, sans-serif; font-size: 14px; color: #333;">All Rights Reserved.</p>
    </footer>
</div>

        
    </div>
</body>
</html>