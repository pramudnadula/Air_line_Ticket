<!DOCTYPE html>
<html>

<head>

    <title>Airline Ticket Reservation</title>
    <!--Link Stylessheets-->
    <link rel="stylesheet" type="text/css" href="../css/T1style.css">
    <link rel="stylesheet" type="text/css" href="../css/T1topnavigation.css">
    <link rel="stylesheet" type="text/css" href="../css/T1searchnavigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/T1header.css">
    <link rel="stylesheet" type="text/css" href="../css/T1log.css">
    <link rel="stylesheet" type="text/css" href="../css/T1wallpaper.css">
    <link rel="stylesheet" type="text/css" href="../css/T1bottomnavigation1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div class="header">
        <!-- Header/Logo Title -->
        <!-- Logo and left side font -->
        <div class="box"><a><img src="../image/Logo3.png" width="280" height="70" alt="Ace Logo"></a>

        </div>


        <div class="log">Login / Register </div>




        <!--Top Navigation bar-->
        <ul class="menu">


            <li class="menu"><a href="http://localhost:8081/Air_line/php/hindex.php">Contact Us</a></li>
            <li class="menu"><a href="../html/support.html">Support</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/html/news.html">News</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/php/kindex.php">Airlines</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/php/pview.php">My Booking</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/php/pindex.php">Book Ticket</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/html/home.html">Home</a></li>
        </ul>
    </div>

    <section class="left-section">
        <div id="left-cover" class="cover cover-hide">

            <h1>Welcome !</h1>
            <h3>Already have an account ?</h3>
            <button type="button" class="switch-btn" onclick="location.reload()">Login</button>
        </div>
        <div id="left-form" class="form fade-in-element">
            <h1>Login</h1>
            <form action="T1login.php" method="POST">
                <input type="text" name="user-name" class="input-box" placeholder="User Name" required>
                <input type="password" name="user-pass" class="input-box" placeholder="Password">
                <input type="submit" name="login-btn" class="btn" value="Login">
            </form>
        </div>
    </section>

    <section class="right-section">
        <div id="right-cover" class="cover fade-in-element">
            <h1>Welcome !</h1>
            <h3>Don't have an account ?</h3>
            <button type="button" class="switch-btn" onclick="switchSignup()">Signup</button>
        </div>
        <div id="right-form" class="form form-hide">
            <h1>Signup</h1>
            <form action="T1register.php" method="post">
                <input type="text" name="User-name" class="input-box" placeholder="User Name" required>
                <input type="tel" name="Phone-number" class="input-box" placeholder="Phone Number  (ex:077-1234567)"
                    pattern="[0-9]{3}-[0-9]{7}" required>
                <textarea id="address1" name="Address" class="input-box" placeholder="Address" rows="4" cols="50"
                    required></textarea>
                <input type="email" name="user-email" class="input-box" placeholder="Email" required>
                <input type="number" name="Postal" class="input-box" placeholder="Postal code" required>
                <input type="password" name="user-pass" class="userpass" placeholder="Password" required>
                <input type="password" name="user-cpass" class="usercpass" placeholder="Confirm Password" required>




                <input id="jbtn" type="submit" name="signup-btn" class="btn" value="Signup">
            </form>



        </div>

    </section>






    <!--line bottom-->
    <h1 class="line"></h1>

    <div class="vision">
        <p> <a>.<a /></p>
    </div>

    <div class="bottom-icon">
        <ul>
            <li><a href="https://www.facebook.com/" target="black"><i class="fa fa-facebook"></i></a></li>
            <li><a href="https://twitter.com/login" target="black"><i class="fa fa-twitter"></i></a></li>
            <li><a href="https://www.google.com/" target="black"><i class="fa fa-google"></i></a></li>
            <li><a href="https://www.youtube.com/" target="black"><i class="fa fa-youtube"></i></a></li>
            <li><a href="https://www.instagram.com/" target="black"><i class="fa fa-instagram"></i></a></li>
        </ul>
    </div>





    <!--Bottom Navigation bar-->
    <div class="bottom-footer">
        <div class="bottom-nav">
            <ul>
                <li><a class="bottomnavigation" href="../html/Home.html">Home</a></li>
                <li><a href="http://localhost:8081//Airline/html/pprivacy.html">Privacy</a></li>
                <li><a href="http://localhost:8081//Airline/html/teams.html">Terms & Conditions</a></li>
                <li><a href="http://localhost:8081/Airline/php/hindex.php#">Contact Us</a></li>
            </ul>
        </div>


        <div class="footer-end">
            <p> <a href="https://www.sliit.lk/">COPYRIGHT COMPANY © 2020 : ALL RIGHT RESERVED</a></p>
        </div>

        <script src="../js/T1main.js"></script>
        <script src="../js/T1confirm.js"></script>
</body>

</html>