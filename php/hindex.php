<?php
   require 'haction.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Airline Ticket Reservation</title>

    <!--Link Stylessheets-->
    <link rel="stylesheet" type="text/css" href="../css/hstyles.css">
    <link rel="stylesheet" type="text/css" href="../css/htopnavigation.css">
    <link rel="stylesheet" type="text/css" href="../css/hsearchnavigation.css">
    <link rel="stylesheet" type="text/css" href="../css/hheader.css">
    <link rel="stylesheet" trpe="text/css" href="../css/hbottomnavigation1.css">
    <link rel="stylesheet" type="text/css" href="../css/hform.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">




</head>

<body>
    <div id="backgroud"></div>

    <div class="header">
        <!-- Header/Logo Title -->
        <!-- Logo and left side font -->
        <div class="box">
            <a href="logo.html"><img src="../image/Logo3.png" width="280" height="70" alt="Ace Logo"></a>

        </div>


        <button class="log">Login / Register </button>




        <!--Top Navigation bar-->
        <ul class="menu">


            <li class="menu"><a class="navigation" href="http://localhost:8081/Air_line/php/hindex.php">Contact Us</a>
            </li>
            <li class="menu"><a href="../html/support.html">Support</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/html/news.html">News</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/php/kindex.php">Airlines</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/php/pview.php">My Booking</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/php/pindex.php">Book Ticket</a></li>
            <li class="menu"><a href="http://localhost:8081/Air_line/html/home.html">Home</a></li>
        </ul>
    </div>


    <div class="boxdcontainer">
        <div class="boxrow">
            <div class="colomnh">
                <h4 class="headTitle">Write your comment!</h4>
                <form action="hindex.php" method="POST">
                    <input type="hidden" name="id" value="<?= $u_id; ?>">
                    <div class="formrow">
                        <input type="text" name="name" class="formcon" placeholder="Enter your name" required
                            value="<?= $u_name; ?>">
                    </div>
                    <div class="formrow">
                        <textarea name="comment" class="formcon" placeholder="write your comment here"
                            required><?= $u_comment; ?></textarea>
                    </div>
                    <div class="formrow">
                        <?php if ($update==true) { ?>
                        <input type="submit" name="update" class="bottonupdate" value="Update comment">
                        <?php } else { ?>
                        <input type="submit" name="submit" class="buttonpost" value="Post comment">
                        <?php } ?>

                        <h5 class="postt"><?= $msg; ?></h5>
                    </div>
                </form>
            </div>
        </div>


        <div class="boxrow">
            <div class="colomnh  ">
                <?php
                        $sql="SELECT * FROM comment_table ORDER BY id DESC";
                        $result=$conn->query($sql);
                        while ($row=$result->fetch_assoc()) {
                            ?>
                <div class="cardrow">
                    <div class="cardhead">
                        <span class="poname">Posted By : <?= $row['name'] ?> </span>
                        <span class="ondate">On : <?= $row['cur_date'] ?></span>
                    </div>
                    <div class="cardb">
                        <p class="card-text"><?= $row['comment'] ?></p>
                    </div>
                    <div class="cardf">
                        <div class="edicon">
                            <a href="haction.php?del=<?= $row['id'] ?> " class="mrg"
                                onclick="return confirm('Do you want to delete this comment?');" title="Delete"><i
                                    class="editDelete"><img src="../image/delete.png"></i></a>
                            <a href="hindex.php?edit=<?= $row['id'] ?>" title="Edit"><i class="editDelete"><img
                                        src="../image/edit.png"></i></a>
                        </div>
                    </div>



                </div>
                <?php
                        } ?>
            </div>
        </div>
    </div>


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
                <li><a href="../html/home.html">Home</a></li>
                <li><a href="../html/pprivacy.html">Privacy</a></li>
                <li><a href="../html/teams.html">Terms & Conditions</a></li>
                <li><a class="bottomnavigation" href="hindex.php">Contact Us</a></li>

            </ul>
        </div>


        <div class="footer-end">
            <p> <a href="https://www.sliit.lk/">COPYRIGHT COMPANY © 2020 : ALL RIGHT RESERVED</a></p>
        </div>
    </div>
</body>

</html>