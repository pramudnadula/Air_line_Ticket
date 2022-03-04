<!-- opening php tag -->
<?php

    require_once("pconnection.php");

    if (isset($_POST['Submit'])) {
        //Get post values
        if (empty($_POST['name'])||empty($_POST['nic'])||empty($_POST['email'])||empty($_POST['age'])||empty($_POST['from'])||empty($_POST['to'])||empty($_POST['date1'])||empty($_POST['date2'])||empty($_POST['class'])||empty($_POST['adults'])||empty($_POST['children'])||empty($_POST['infants'])) {
            echo 'Please Fill in the Blank ';
        } else {
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
            
            //Insert values
            $query = "insert into booking( User_Name, User_NIC, User_Email, User_Age, User_From, User_To, User_Date1, User_Date2, User_Class, User_Adults, User_Children, User_Infants) value('$UserName','$UserNIC','$UserEmail','$UserAge','$UserFrom','$UserTo','$UserDate1','$UserDate2','$UserClass','$UserAdults','$UserChildren','$UserInfants')";
            $result= mysqli_query($con, $query);

            if ($result) {
                // header("location:pview.php");
            } else {
                echo 'Please Check Your Query';
            }
        }
    } else {
        header("location:pindex.php");
    }
?>
<!-- closing php tag -->


<script type="text/javascript">
alert("Recorde Submit Successful");
window.location = "pview.php";
</script>