<?php

require_once('T1config.php');
	

if(isset($_POST['update']))
{	
	$name=$_POST['name'];
	$Phonenumber=$_POST['Phonenumber'];
	$Address=$_POST['Address'];
	$Email=$_POST['Email'];
	$Postalcode=$_POST['Postalcode'];
	$Password=$_POST['Password'];

// sql to update records
$sql = "UPDATE `usertable` SET `Phonenumber`='".$Phonenumber."',`Address`='".$Address."',`Email`='".$Email."',`Postalcode`='".$Postalcode."',`Password`='".$Password."' WHERE `Username`='$name'";
$result = $conn->query($sql) === TRUE;

if($result)
{
	
	echo 'Date updated';
}
else{
	echo 'Date not updated';
}
}
else if(isset($_POST['delete']))
{

$name=$_POST['name'];
// sql to delete a record

$sql1 = "DELETE FROM usertable WHERE `Username`='$name'";

if ($conn->query($sql1) === TRUE) {
  echo "Record deleted successfully";
  
} else {
  echo "Error deleting record: " . $conn->error;
}
}
	
?>	