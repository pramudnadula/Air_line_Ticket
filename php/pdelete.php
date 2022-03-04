<!-- opening php tag -->
<?php
        require_once("pconnection.php");


        if (isset($_GET['Del'])) {
            //Get values
            $UserID = $_GET['Del'];
            //Delete and Update values
            $query = " delete from  booking  where User_ID = '".$UserID."'";
            $result = mysqli_query($con, $query);
            
            //Refresh the page and check error
            if ($result) {
                //  header("location:pview.php");
            } else {
                echo 'Please Check Your Query';
            }
        } else {
            header("location:pview.php");
        }
        $con->close();
?>
<!-- closing php tag -->


<script type="text/javascript">
alert("Recorde Deleted Successful");
window.location = "pview.php";
</script>