<?php

if (isset($_POST["submit"])) {

        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $address = $_POST["address"];
        $username = $_POST["username"];
        $contact = $_POST["contact"];
        $pettype = $_POST["pet"];
        $petname = $_POST["petname"];
        $petbreed = $_POST["petbreed"];
        $petage = $_POST["petage"];
        $petgender = $_POST["petgender"];

        require_once '../process.php';
        require_once 'function.inc.php';


        petSurrender($conn, $username,$lname, $fname, $contact, $pettype, $petname, $petbreed, $petage, $petgender );


}
      
