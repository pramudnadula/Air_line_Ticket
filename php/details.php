<?php
	
	include_once 'config.php';

?>

<?php

	$namecard =$_POST["Field1"];
	$cardno =$_POST["Field2"];
	$secode =$_POST["Field3"];
	$expdate =$_POST["Field4"];
	$name =$_POST["Field5"];
	$email =$_POST["Field6"];
	
	$mysq = "INSERT INTO payments(Name,Email,CardNo,Name_on_card,ExpiryDate,SecurityCode)VALUES ('{$name}','{$email}','{$cardno}','{$namecard}','{$expdate}','{$secode}')";
		
		
	
	$result= mysqli_query($conn,$mysq);
	
	if ($result)
	{
		//echo"<scripy>alert ('Record Inserted Successfully') </script>";
	}
	else
	{
		echo "error";
	}
	
	mysqli_close($conn);
?>
<script type="text/javascript">
alert("Record Submit Successful");
window.location="list.php";
</script>