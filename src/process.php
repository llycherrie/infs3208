<?php
$servername = "mysql";
$uid = "php";
$password = "php";
$dBName = "cloud_computing";

// Create connection
$conn = mysqli_connect($servername, $uid, $password, $dBName);
//
// Check connection
 if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
   }
