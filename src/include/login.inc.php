<?php

if (isset($_POST["submit"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdRepeat"];


        require_once '../process.php';
        require_once 'function.inc.php';

        if (emptyInputLogin($username, $pwd) !== false){
                header("location: ../login.php?error=emptyinput");
                exit();



        }

        loginUser($conn, $username, $pwd);
}

else{

        header("location: ../login.php");
        exit();

}
