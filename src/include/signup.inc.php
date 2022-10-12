<?php

if (isset($_POST["submit"])) {

        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $pwd = $_POST["pwd"];
        $pwdRepeat = $_POST["pwdRepeat"];

        require_once '../process.php';
        require_once 'function.inc.php';

        if (emptyInputSignup($name, $email, $username, $pwd ,$pwdRepeat) !== false){
                header("location: ../register.php?error=emptyinput");
                exit();

        }

        if (invalidUid($username) !== false){
                header("location: ../register.php?error=invaliduid");
                exit();

        }

       if (invalidEmail($email) !== false){
                header("location: ../register.php?error=invalidemail");
                exit();

       }
        if (pwdMatch($pwd, $pwdRepeat) !== false){
                header("location: ../register.php?error=passwordmismatch");
                exit();

        }
/**
        
        if (uidExists($conn, $username, $email) !== false){
                header("location: ../register.php?error=usernametaken");
                exit();

        }
        **/

        createUser($conn, $name, $email, $username, $pwd );


}
