<?php
    
    include_once 'config.php';

?>

<?php
    

    $user_list = '';

    // getting the list of users
    $query = "SELECT * FROM payments";
    $sl = mysqli_query($conn, $query);

    

    while ($card = mysqli_fetch_assoc($sl)) {
        $user_list .= "<tr>";
        $user_list .= "<td>{$card['Name']}</td>";
        $user_list .= "<td>{$card['Email']}</td>";
        $user_list .= "<td>{$card['CardNo']}</td>";
        $user_list .= "<td>{$card['Name_on_card']}</td>";
        $user_list .= "<td>{$card['ExpiryDate']}</td>";
        $user_list .= "<td>{$card['SecurityCode']}</td>";
        //$user_list .= "<td><a href=\"modify-user.php?user_id={$card['CardNo']}\">Edit</a></td>";
        $user_list .= "<td><a href=\"delete-user.php?card_no={$card['CardNo']}\" 
						onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
        $user_list .= "</tr>";
    }
 ?>
<!DOCTYPE html>
<html>

<head>

    <title> PAYMENTS </title>

</head>
<!--Link Stylessheets-->
<!-- <link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="css/taxistyle.css">
<link rel="stylesheet" type="text/css" href="css/form.css"> -->



<link rel="stylesheet" type="text/css" href="../css/pstyles.css">
<link rel="stylesheet" type="text/css" href="../css/ctopnavigation.css">
<link rel="stylesheet" type="text/css" href="../css/csearchnavigation.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../css/cheader.css">
<link rel="stylesheet" type="text/css" href="../css/cpayment.css">

<link rel="stylesheet" type="text/css" href="../css/cbottomnavigation1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>

</style>
</head>

<body>
    <!--Hero image-->
    <div id="hero-image"></div>

    <div class="header">



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




    <br><br><br><br>

    <table class="masterlist">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>CardNo</th>
            <th>Name_on_card</th>
            <th>ExpiryDate</th>
            <th>SecurityCode</th>
            <th>Delete</th>
        </tr>

        <?php echo $user_list; ?>

    </table>



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
                <li><a class="bottomnavigation" href="../html/Home.html">Home</a></li>
                <li><a href="http://localhost:8081//Air_line/html/pprivacy.html">Privacy</a></li>
                <li><a href="http://localhost:8081//Air_line/html/teams.html">Terms & Conditions</a></li>
                <li><a href="http://localhost:8081/Air_line/php/hindex.php#">Contact Us</a></li>
            </ul>
        </div>


        <div class="footer-end">
            <p> <a href="https://www.sliit.lk/">COPYRIGHT COMPANY © 2020 : ALL RIGHT RESERVED</a></p>
        </div>


</body>

</html>