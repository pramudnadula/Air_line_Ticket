<?php

$con= new mysqli("localhost", "root", "", "air");

if ($con->connect_error) {
    die("Connection failed:" .$con->connect_error);
}