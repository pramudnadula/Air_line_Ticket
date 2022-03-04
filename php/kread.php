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


    </div>



    </div>

    <?php

require 'kconfig.php';



$sql = "SELECT * FROM flightDetails";
$result = $con->query($sql);

//Get all rows as an array
$rows = $result->fetch_all(MYSQLI_ASSOC);



//Check if data is stored in $rows
if ($rows == null) {
    die("Now rows were found");
} else {

    //Print each row
    echo "<table align ='left' border='1px' style='width: 100%; line-height: 30px; margin-top:100px; background: rgba(255, 255, 255, 0.555);'>";

    echo "<tr>
    <th>Flight Number</th>
    <th>Airline</th>
    <th>Departure Date</th>
    <th>Departure Time</th>
    <th>Edit</th>
    <th>Delete</th>
    </tr>";


    foreach ($rows as $row) {
        ?>

    <tr>
        <td><?= $row["Flight_No"] ?></td>
        <td><?= $row["Airline"] ?></td>
        <td><?= $row["Departure_Date"] ?></td>
        <td><?= $row["Departure_Time"] ?></td>
        <td>
            <a href="kedit.php?id=<?= $row["Flight_No"] ?>">
                <button type='button' class='btnedit'>Edit</button>
            </a>
        </td>
        <td>
            <a href="kdelete.php?id=<?= $row["Flight_No"] ?>">
                <button type='button' class='btndelete'>Delete</button>
            </a>
        </td>
    </tr>

    <?php
    }
    echo "</table>";
}

?>


    <!--line bottom-->
    <h1 class="line"></h1>

    <div class="vision">
        <p> <a>.</a></p>
    </div>








</body>

</html>