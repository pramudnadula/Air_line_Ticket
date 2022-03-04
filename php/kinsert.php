<?php

require 'kconfig.php';

if (isset($_POST["btnsubmit"])) {
    $FlightNo = $_POST["FlightNo"];
    $Airline = $_POST["Airline"];
    $DepartureDate = $_POST["DepartureDate"];
    $DepartureTime = $_POST["DepartureTime"];

    $sql= "INSERT INTO flightdetails(Flight_No, Airline, Departure_Date, Departure_Time) VALUES($FlightNo, '$Airline', '$DepartureDate', '$DepartureTime')";

    if ($con->query($sql)) {
        echo "successfully submited";
    } else {
        echo "Error:".$con->error;
    }
}

$con->close();

?>

<script type="text/javascript">
alert("Flight details added successfully");
window.location = "kindex.php";
</script>