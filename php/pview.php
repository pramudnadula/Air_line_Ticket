<?php

    require_once("pconnection.php");
    $query = " select * from booking ";
    $result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--IT20168568-->
    <!-- J.K.D.Pramud Nadula -->

    <title>Airline Ticket Reservation</title>
    <!--Link Stylessheets-->
    <link rel="stylesheet" type="text/css" href="../css/pstyles.css" />
    <link rel="stylesheet" type="text/css" href="../css/ptopnavigation.css" />
    <link rel="stylesheet" type="text/css" href="../css/psearchnavigation.css" />
    <link rel="stylesheet" type="text/css" href="../css/pheader.css" />
    <link rel="stylesheet" trpe="text/css" href="../css/pbottomnavigation1.css" />
    <link rel="stylesheet" type="text/css" href="../css/pprofile.css" />
    <link rel="stylesheet" type="text/css" href="../css/pchart.css" />
    <link rel="stylesheet" type="text/css" href="../css/ppofile2.css" />
    <link rel="stylesheet" type="text/css" href="../css/pslider.css" />


    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="../CSS/ptable.css">

</head>

<body>

    <!-- Hero Image -->
    <div id="hero-image"></div>

    <div class="header">
        <!-- Header/Logo Title -->
        <!-- Logo and left side font -->
        <div class="box">
            <a href="logo.html"><img src="../image/Logo3.png" width="280" height="70" alt="ATR Logo" /></a>
        </div>

        <!-- Logo Out Button But still not coonect to the main page -->
        <a><button class="log">Log Out</button></a>



        <!--Top Navigation bar-->
        <ul class="menu">
            <li class="menu"><a href="http://localhost:8081/Air_line/php/hindex.php">Contact Us</a></li>
            <li class="menu"><a href="../html/support.html">Support</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/html/news.html">News</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/php/kindex.php">Airlines</a></li>
            <li class="menu"><a class="navigation" href="http://localhost:8081/Air_line/php/pview.php">My Booking</a>
            </li>
            <li class="menu"><a href="http://localhost:8081/Air_line/php/pindex.php">Book Ticket</a>
            </li>
            <li class="menu"><a href="http://localhost:8081/Air_line/html/home.html">Home</a></li>

        </ul>
    </div>

    <!-- Details From -->

    <div class="container_viewing">
        <div class="row_viewing">
            <div class="col_viewing">
                <div class="card_viewing">
                    <div class="card_title_viewing">
                        <h3> Booking Details </h3>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <!-- Table column Title -->
                            <td>
                                <h1>ID</h1>
                            </td>
                            <td>
                                <h1>Name</h1>
                            </td>
                            <td>
                                <h1>NIC</h1>
                            </td>
                            <td>
                                <h1>Email</h1>
                            </td>
                            <td>
                                <h1>Age</h1>
                            </td>
                            <td>
                                <h1>From</h1>
                            </td>
                            <td>
                                <h1>To</h1>
                            </td>
                            <td>
                                <h1>Depart</h1>
                            </td>
                            <td>
                                <h1>Return</h1>
                            </td>
                            <td>
                                <h1>Class</h1>
                            </td>
                            <td>
                                <h1>Adults</h1>
                            </td>
                            <td>
                                <h1>Children</h1>
                            </td>
                            <td>
                                <h1>Infants</h1>
                            </td>
                            <td>
                                <h1>Edit</h1>
                            </td>
                            <td>
                                <h1>Delete</h1>
                            </td>



                        </tr>

                        <?php
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $UserID = $row['User_ID'];
                                            $UserName = $row['User_Name'];
                                            $UserNIC = $row['User_NIC'];
                                            $UserEmail = $row['User_Email'];
                                            $UserAge = $row['User_Age'];
                                            $UserFrom = $row['User_From'];
                                            $UserTo = $row['User_To'];
                                            $UserDate1 = $row['User_Date1'];
                                            $UserDate2 = $row['User_Date2'];
                                            $UserClass = $row['User_Class'];
                                            $UserAdults = $row['User_Adults'];
                                            $UserChildren = $row['User_Children'];
                                            $UserInfants = $row['User_Infants']; ?>
                        <tr>
                            <td>
                                <h2><?php echo $UserID ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserName ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserNIC ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserEmail ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserAge ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserFrom ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserTo ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserDate1 ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserDate2 ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserClass ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserAdults ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserChildren ?></h2>
                            </td>
                            <td>
                                <h2><?php echo $UserInfants ?></h2>
                            </td>
                            <td><a class="button_editing" href="pedit.php?GetID=<?php echo $UserID ?>">Edit</a></td>
                            <td><a class="button_deleting" href="pdelete.php?Del=<?php echo $UserID ?>">Delete</a></td>
                        </tr>
                        <?php
                                        }
                                ?>
                    </table>
                </div>
            </div>
        </div>
    </div><br>
    <!-- Bottom Section -->
    <section id="bottom-section">
        <!--Line Chart and js -->
        <div class="chart">
            <div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto"></div>
            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            <script src="../js/plinechart.js "></script>
        </div>

        <!--slider-->
        <div class="container">
            <div class="slides">
                <!--Pic1-->
                <div class="slide">
                    <img src="../image/airline1.jpg" alt="" />
                </div>
                <!--Pic2-->
                <div class="slide">
                    <img src="../image/slide-4.jpg" alt="" />
                    <div class="slide-content">
                        <a href="https://www.youtube.com/watch?v=uXyy7lgDj9k">
                            <h1>Norway</h1>
                        </a>
                    </div>
                </div>
                <!--Pic3-->
                <div class="slide">
                    <img src="../image/slide-6.jpg" alt="" />
                    <div class="slide-content">
                        <a href="https://www.youtube.com/watch?v=uWw6e8SXXQA">
                            <h1>Egypt</h1>
                        </a>
                    </div>
                </div>
                <!--Pic4-->
                <div class="slide">
                    <img src="../image/slide-2.jpg" alt="" />
                    <div class="slide-content">
                        <a href="https://www.youtube.com/watch?v=0UFCRBIg3Y0">
                            <h1>Bali</h1>
                        </a>
                    </div>
                </div>
                <!--Pic5-->
                <div class="slide">
                    <img src="../image/slide-3.jpg" alt="" />
                    <div class="slide-content">
                        <a href="https://www.youtube.com/watch?v=WSu4zd_c9aA">
                            <h1>Maldives</h1>
                        </a>
                    </div>
                </div>
                <!--Pic6-->
                <div class="slide">
                    <img src="../image/slide-5.jpg" alt="" />
                    <div class="slide-content">
                        <a href="https://www.youtube.com/watch?v=1TAwBr26J7U">
                            <h1>Himalaya</h1>
                        </a>
                    </div>
                </div>
                <!--Pic7-->
                <div class="slide">
                    <img src="../image/slide-1.jpg" alt="" />
                    <div class="slide-content">
                        <a href="https://www.youtube.com/watch?v=r8rZQKXijb8">
                            <h1>Turkey</h1>
                        </a>
                    </div>
                </div>
                <!--Pic8-->
                <div class="slide">
                    <img src="../image/slide-7.jpg" alt="" />
                    <div class="slide-content">
                        <a href="https://www.youtube.com/watch?v=lZ_E6HggA4w">
                            <h1>London</h1>
                        </a>
                    </div>
                </div>
                <!--Pic9-->
                <div class="slide">
                    <img src="../image/slide-8.jpg" alt="" />
                    <div class="slide-content">
                        <a href="https://www.youtube.com/watch?v=GljTvdEDqJM">
                            <h1>Paris</h1>
                        </a>
                    </div>
                </div>
            </div>

            <div class="slide-controls">
                <button id="prev-btn">
                    <i class="sidemove"><img src="../image/left-arrow.png" /></i>
                </button>
                <button id="next-btn">
                    <i class="sidemove"><img src="../image/right-arrow.png" /></i>
                </button>
            </div>
        </div>
        <!--Java scrip in slider-->
        <script src="../js/pslider.js "></script>
    </section>

    <!-- wite 2-->
    <div class="boxprofilenew">
        <div class="imaBX">
            <img src="../image/managebook.jpg" width="215" height="325" />
        </div>

        <div class="contentprofilenew">
            <h2>Manage My Booking</h2>
            <a>We know your travel plans can sometimes change. With Manage My
                Booking, you can make enhancements to your trip online conveniently,
                instantly.</a><br />
            <h3>Modify your flight</h3>
            If something urgent crops up, you can change the date and time of your
            flights up to 4 hours before departure, saving the trouble and cost of
            cancelling your trip.<br />
            <h3>Manage your other travel essentials too</h3>

            Do more than just reviewing, changing or cancelling a booking: <br />
            1.Edit your contact details. <br />
            2.Select your favourite seat easily.<br />
            3.Save on excess baggage payment with prepaid baggage option.<br />
            4.Make payments in the currency of your choice with multi-currency
            payment option.
            <h3>Modify your flight</h3>

            <a>If something urgent crops up, you can change the date and time of
                your flights up to 4 hours before departure, saving the trouble and
                cost of cancelling your trip.</a>

            <h3>Cancellation and refund</h3>
            <a>
                If the fare rules allow, you can cancel your upcoming flights to fit
                your travel plans. You can get your refund online as well.</a>
        </div>
    </div>

    <!--bottom footer-->
    <h1 id="linebottom"></h1>

    <div class="bottom-icon">
        <ul>
            <li>
                <a href="https://www.facebook.com/" target="black"><i class="social"><img
                            src="../image/facebook.png" /></i></a>
            </li>
            <li>
                <a href="https://twitter.com/login" target="black"><i class="social"><img
                            src="../image/twitter.png" /></i></a>
            </li>
            <li>
                <a href="https://www.google.com/" target="black"><i class="social"><img
                            src="../image/google-plus.png" /></i></a>
            </li>
            <li>
                <a href="https://www.youtube.com/" target="black"><i class="social"><img
                            src="../image/youtube.png" /></i></a>
            </li>
            <li>
                <a href="https://www.instagram.com/" target="black"><i class="social"><img
                            src="../image/instagram.png" /></i></a>
            </li>
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
            <p>
                <a href="https://www.sliit.lk/">COPYRIGHT COMPANY © 2020 : ALL RIGHT RESERVED</a>
            </p>
        </div>
    </div>
</body>

</html>