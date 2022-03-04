<!-- opening php tag -->
<?php

    require_once("pconnection.php");

    if (isset($_POST['update'])) {
        //Get post values
        $UserID = $_GET['ID'];
        $UserName = $_POST['name'];
        $UserNIC = $_POST['nic'];
        $UserEmail = $_POST['email'];
        $UserAge = $_POST['age'];
        $UserFrom = $_POST['from'];
        $UserTo = $_POST['to'];
        $UserDate1 = $_POST['date1'];
        $UserDate2 = $_POST['date2'];
        $UserClass = $_POST['class'];
        $UserAdults = $_POST['adults'];
        $UserChildren = $_POST['children'];
        $UserInfants = $_POST['infants'];

        //Update values
        $query = " update booking set User_Name = '".$UserName."',User_NIC = '".$UserNIC."',User_Email = '".$UserEmail."',User_Age = '".$UserAge."',User_From = '".$UserFrom."',User_To = '".$UserTo."',User_Date1 = '".$UserDate1."', User_Date2 = '".$UserDate2."',User_Class = '".$UserClass."',User_Adults = '".$UserAdults."',User_Children = '".$UserChildren."',User_Infants = '".$UserInfants."' where User_ID='".$UserID."'";
        $result = mysqli_query($con, $query);

        if ($result) {
            // header("location:pview.php");
        } else {
            echo ' Please Check Your Query';
        }
    } else {
        header("location:pview.php");
    }
    
?>
<!-- closing php tag -->
<script type="text/javascript">
alert("Recorde Update Successful");
window.location = "pview.php";
</script>