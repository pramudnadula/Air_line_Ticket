<!DOCTYPE html>
<html>

<head>

    <title> PAYMENTS </title>

</head>
<!--Link Stylessheets-->

<!-- <link rel="stylesheet" type="text/css" href="../css/taxistyle.css">
<link rel="stylesheet" type="text/css" href="../css/form.css"> -->



<link rel="stylesheet" type="text/css" href="../css/pstyles.css">
<link rel="stylesheet" type="text/css" href="../css/ctopnavigation.css">
<link rel="stylesheet" type="text/css" href="../css/csearchnavigation.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/cheader.css">
<link rel="stylesheet" type="text/css" href="../css/cpayment.css">

<link rel="stylesheet" type="text/css" href="../css/cbottomnavigation1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!--Hero image-->
    <div id="hero-image"></div>

    <div class="header">

        <!-- Logo Out Button But still not coonect to the main page -->
        <a><button class="log">Log Out </button></a>

        <!-- Header/Logo Title -->
        <!-- Logo and left side font -->
        <div class="box">
            <a href="logo.html"><img src="../image/Logo3.png" width="280" height="70" alt="ATR Logo"></a>
        </div>




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





    <div class="my">






        <form class="form-style-9" method="post" action="details.php">


            <h1
                style="font-family: cursive, sans-seri; text-align:center;font-size:50px;font-weight:bold;color:#330099;">
                PAYMENTS</h1>
            <label for="lname">Name On Card</label>
            <input type="text" class="text" name="Field1" class="field-style field-split align-left" />

            <label for="lname">Card Number</label>
            <input type="text" class="text" name="Field2" class="field-style field-split align-left"
                placeholder="xxxx xxxx xxxx xxxx" />

            <label for="lname">Security_code</label>
            <input type="text" class="text" name="Field3" class="field-style field-split align-left"
                placeholder="****" />

            <label for="lname">Expiry_date</label>
            <input type="text" class="text" name="Field4" class="field-style field-split align-right"
                placeholder="DD/MM" />

            <label for="lname">Name</label>
            <input type="text" class="text" name="Field5" class="field-style field-split align-left" />

            <label for="lname">Email</label>
            <input type="text" class="text" name="Field6" class="field-style field-split left"
                placeholder="Example@gmail.com" />

            <br><br><br>
            <center>
                <input type="submit" value="Submit"><br><br>

                <a href="http://localhost:8081/Air_line/php/list.php">Pyament History</a>
            </center>


        </form>

    </div>
    <br>





    <!--line bottom-->
    <h1 class=" line "></h1>

    <div class="vision ">
        <p> <a>.</a></p>
    </div>

    <div class="bottom-icon ">
        <ul>
            <li><a href="# " target="black "><i class="fa fa-facebook "></i></a></li>
            <li><a href="# " target="black "><i class="fa fa-twitter "></i></a></li>
            <li><a href="# " target="black "><i class="fa fa-google "></i></a></li>
            <li><a href="# " target="black "><i class="fa fa-youtube "></i></a></li>
            <li><a href="# " target="black "><i class="fa fa-instagram "></i></a></li>
        </ul>
    </div>

    <!--Bottom Navigation bar-->
    <div class="bottom-footer ">
        <div class="bottom-nav ">
            <ul>
                <li><a class="bottomnavigation" href="../html/Home.html">Home</a></li>
                <li><a href="http://localhost:8081//Air_line/html/pprivacy.html">Privacy</a></li>
                <li><a href="http://localhost:8081//Air_line/html/teams.html">Terms & Conditions</a></li>
                <li><a href="http://localhost:8081/Air_line/php/hindex.php#">Contact Us</a></li>
            </ul>
        </div>


        <div class="footer-end ">
            <p> <a href="https://www.sliit.lk/ ">COPYRIGHT COMPANY © 2020 : ALL RIGHT RESERVED</a></p>
        </div>


</body>

</html>