<?php

$conn = new mysqli("localhost", "root", "", "air");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$Flight_No = $_GET['id'];

$sql = "SELECT * FROM flightdetails WHERE Flight_No=$Flight_No";
$row = $conn->query($sql)->fetch_all(MYSQLI_ASSOC)[0];

$Airline = $row['Airline'];
$Departure_Date = $row['Departure_Date'];
$Departure_Time = $row['Departure_Time'];



if (isset($_POST["update"])) {
    $Flight_No = $_POST['flight-no'];
    $Airline = $_POST['airline'];
    $Departure_Date = $_POST['date'];
    $Departure_Time = $_POST['time'];


    $sql = "UPDATE flightdetails SET `Airline`='" . $Airline . "' , `Departure_Date`='" . $Departure_Date .
        "' , `Departure_Time`='" . $Departure_Time . "' WHERE Flight_No=$Flight_No";

    if ($conn->query($sql) === true) {
        echo "<script> alert('Flight details updated successfully')</script>";
        echo "<script>location='kindex.php'</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}


?>

<form action="" method="POST">
    <table>

        <tr>
            <td>Flight number</td>
            <td><input type="text" name="flight-no" id="flight-no" value="<?= $Flight_No ?>" readonly></td>
        </tr>

        <tr>
            <td>Airline</td>
            <td><input type="text" name="airline" id="airline" value="<?= $Airline ?>"></td>
        </tr>

        <tr>
            <td>Date</td>
            <td><input type="text" name="date" id="date" value="<?= $Departure_Date ?>"></td>
        </tr>

        <tr>
            <td>Time</td>
            <td><input type="text" name="time" id="time" value="<?= $Departure_Time ?>"></td>
        </tr>

        <tr>
            <td>
                <button name="update">Update</button>
            </td>
        </tr>

    </table>
</form>