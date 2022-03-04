<!DOCTYPE html>
<html>

<head>

    <title>Airline Ticket Reservation</title>
    <!--Link Stylessheets-->
    <link rel="stylesheet" type="text/css" href="../css/kstyles.css">
    <link rel="stylesheet" type="text/css" href="../css/ktopnavigation.css">
    <link rel="stylesheet" type="text/css" href="../css/ksearchnavigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/kheader.css">
    <link rel="stylesheet" type="text/css" href="../css/kwallpaper.css">
    <link rel="stylesheet" type="text/css" href="../css/kbottomnavigation1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/kbooktkt.css">


</head>

<body>
    <!-- Hero Image -->
    <div id="hero-image"></div>

    <div class="header">
        <!-- Header/Logo Title -->
        <!-- Logo and left side font -->
        <div class="box">
            <a href="logo.html"><img src="../image/Logo3.png" width="280" height="70" alt="Ace Logo"></a>

        </div>


        <button class="log">Login / Register </button>




        <!--Top Navigation bar-->
        <ul class="menu">


            <li class="menu"><a href="http://localhost:8081/Air_line/php/hindex.php">Contact Us</a></li>
            <li class="menu"><a href="../html/support.html">Support</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/html/news.html">News</a></li>
            <li class="menu"><a class="navigation" href="http://localhost:8081/Air_line/php/kindex.php">Airlines</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/php/pview.php">My Booking</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/php/pindex.php">Book Ticket</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/html/home.html">Home</a></li>
        </ul>
    </div>





    <?php

    require'kconfig.php';

    ?>

    <form method="post" action="kinsert.php">
        <h2>INSERT FLIGHT DETAILS</h2>
        Flight No :<input type="text" name="FlightNo"><br><br />
        Airline :<input type="text" name="Airline"><br><br />
        Departue Date :<input type="date" name="DepartureDate"><br><br />
        Departure Time : <input type="text" name="DepartureTime"><br><br />
        <input type="submit" value="INSERT" name="btnsubmit">

    </form>
    <br>
    </br>

    VIEW FLIGHT DETAILS

    <form method="get" action="kread.php"><br>
        <input type="submit" value="VIEW DETAILS">
    </form>


    <?php
    require'kread.php';
    ?>








    <!--line bottom-->
    <h1 class="line"></h1>

    <div class="vision">
        <p> <a>.</a></p>
    </div>

    <div class="bottom-icon">
        <ul>
            <li><a href="#" target="black"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#" target="black"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#" target="black"><i class="fa fa-google"></i></a></li>
            <li><a href="#" target="black"><i class="fa fa-youtube"></i></a></li>
            <li><a href="#" target="black"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>





    <!--Bottom Navigation bar-->
    <div class="bottom-footer">
        <div class="bottom-nav">
            <ul>
                <li><a href="../html/home.html">Home</a></li>
                <li><a href="../html/pprivacy.html">Privacy</a></li>
                <li><a href="../html/teams.html">Terms & Conditions</a></li>
                <li><a href="hindex.php">Contact Us</a></li>
            </ul>
        </div>


        <div class="footer-end">
            <p> <a href="https://www.sliit.lk/">COPYRIGHT COMPANY © 2020 : ALL RIGHT RESERVED</a></p>
        </div>


</body>

</html>