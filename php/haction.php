<?php
require 'hconfig.php';

$msg="";
$u_id="";
$u_name="";
$u_comment="";
$update=false;

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $comment=$_POST['comment'];
  $date=date("Y-m-d");

  $sql="INSERT INTO comment_table(name,comment,cur_date)VALUES('$name','$comment','$date')";

  if($conn->query($sql)){
    $msg = "Posted successfully!";
  }
  else{
     $msg = "Failed to post comment!"; 
  }
}

 if(isset($_GET['del'])){
   $id=$_GET['del'];
   $sql="DELETE FROM comment_table WHERE id='$id'";

   if($conn->query($sql)){
     header('location:hindex.php');
   }
 }
 if(isset($_GET['edit'])){
   $id=$_GET['edit'];
    
   $sql="SELECT * FROM comment_table WHERE id='$id'";
   $result=$conn->query($sql);
   echo $conn->error;
   $row=$result->fetch_assoc();


   $u_id=$row['id'];
   $u_name=$row['name'];
   $u_comment=$row['comment'];

   $update=true;
 }

   if(isset($_POST['update'])){
   $id=$_POST['id'];
   $name=$_POST['name'];
   $comment=$_POST['comment'];
   $date=date("Y-m-d");

   $sql="UPDATE comment_table SET name='$name',comment='$comment'
   ,cur_date='$date' WHERE id='$id'";

   if($conn->query($sql)){
    $msg ="Edited successfully!";
   }
 }
?>