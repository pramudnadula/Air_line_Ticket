<?php
  $conn = new mysqli("localhost", "root", "", "air");
  if ($conn->connect_error) {
      die("Connection failed!".$conn->connect_error);
  }