<?php

$conn = new mysqli("localhost", "root", "", "air");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// sql to delete a record
$id =$_GET['id'];
$sql = "DELETE FROM flightdetails WHERE Flight_No=$id";

if ($conn->query($sql) === true) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>


<script type="text/javascript">
alert("Record deleted successfully");
window.location = "kindex.php";
</script>