<?php

$conn = mysqli_connect('localhost', 'root', '', 'air');
mysqli_select_db($conn, 'air');

$name = $_POST['User-name'];
$pnum = $_POST['Phone-number'];
$address = $_POST['Address'];
$email = $_POST['user-email'];
$postal = $_POST['Postal'];
$pass = $_POST['user-pass'];
// sql to Read records
$s = " select * from usertable where Username = '$name'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if ($num == 1) {
    echo"Username already taken";
} else {// sql to Insert records
    $reg= "insert into usertable (Username ,Phonenumber , Address , Email , Postalcode, Password ) values ('$name','$pnum' ,'$address' ,'$email' ,'$postal','$pass')";
    mysqli_query($conn, $reg);
    echo"Registration Successful";
}