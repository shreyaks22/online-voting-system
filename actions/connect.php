<?php

$con = mysqli_connect("localhost", "root", "12345678", "votingsystem");

// Check if the connection was successful
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}  

?>
 