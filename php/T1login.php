<?php

require_once('T1config.php');

$name = $_POST['user-name'];
$pwd = $_POST['user-pass'];
$sql = "SELECT * FROM usertable WHERE Username='$name' AND Password='$pwd'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>

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
    <link rel="stylesheet" type="text/css" href="../css/t1wallpaper.css">
    <link rel="stylesheet" type="text/css" href="../css/T1bottomnavigation1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div class="header">
        <!-- Header/Logo Title -->
        <!-- Logo and left side font -->
        <div class="box"><a href="../html/logo.html"><img src="../image/Logo3.png" width="280" height="70"
                    alt="Ace Logo"></a>

        </div>


        <button class="logout" onclick="document.location='Tlogin.php'">Logout </button>




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




    <div id="account">
        <div id="ha">Welcome <?php echo "$name"; ?> !!</div>
        <div id="qte">"Welcome to your Profile !!. You can change your details or delete your details here"</div>
    </div>
    <div id="account1">
        <div id="h10">Personal details</div>
        <div id="a10">User Name : <?php echo "$name"; ?></div>
        <div id="a10">Phone number : <?php echo $row["Phonenumber"]; ?></div>
        <div id="a10">Address : <?php echo  $row["Address"]; ?></div>
        <div id="a10">Email address : <?php echo  $row["Email"]; ?></div>
        <div id="a10">Postal code : <?php echo  $row["Postalcode"]; ?></div>
        <div id="a10">Password : <?php echo  $row["Password"]; ?></div>

    </div>
    <div id="account2">
        <form action="T1update.php" method="post">
            <h1 id="h10">Edit details</h1>
            <input type="text" id="inputbox" name="name" readonly value="<?php echo "$name"; ?>">
            <input type="tel" name="Phonenumber" id="inputbox1" placeholder="Phonenumber  (ex:077-1234567)"
                pattern="[0-9]{3}-[0-9]{7}" required>
            <input type="text" name="Address" id="inputbox2" placeholder="Address" required>
            <input type="email" name="Email" id="inputbox3" placeholder="Email" required>
            <input type="number" name="Postalcode" id="inputbox4" placeholder="Postalcode" required>
            <input type="password" name="Password" id="inputbox5" placeholder="Password" required>
            <input type="submit" name="update" id="btn" value="Update">
        </form>
        <form action="T1update.php" method="post">
            <input type="text" id="inputbox" name="name" readonly value="<?php echo "$name"; ?>">
            <button id="delete" name="delete">Delete account</button>
        </form>
    </div>
    <!--line bottom-->
    <h1 class="line"></h1>

    <div class="vision">
        <p> <a>.<a /></p>
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

                <li><a class="bottomnavigation" href="../html/home.html">Home</a></li>
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
<?php
    }
} else {
    echo "Invalid email or password";
}
$conn->close();
?>