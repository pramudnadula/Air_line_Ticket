<!-- opening php tag -->
<?php

/**
 * Connect to database and return a mySQLi object
 */

// $con = mysqli_connect("localhost", "root", "", "crud");

// if (!$con) {
//     die("coonection Error");
// }



   //Create connection
   $con = new mysqli("localhost", "root", "", "air");

   //Check if DB is not connected
   if ($con->connect_error) {
       die("Cannot connect to database : " . $con->connect_error);
   }
   
?>
<!-- closing php tag -->