<?php

function emptyInputSignup($name, $email, $username, $pwd ,$pwdRepeat) {

        $result;
        if (empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)) {
                $result = true;
        }
        else {
                $result = false;
        }
        return $result;
}

function invalidUid($username) {
        $result;
        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
                $result = true;
        }
        else {
                $result = false;
        }

       return $result;
}

function invalidEmail($email) {

        $result;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $result = true;
        }
        else {
                $result = false;
        }

        return $result;      
}

function pwdMatch($pwd, $pwdRepeat){

        $result;
        if ($pwd !== $pwdRepeat){
                $result = true;
        }
        else {
                $result = false;
        }

        return $result;

}

function uidExists($conn, $username, $email){



        $sql ="SELECT * FROM LoginDetails WHERE Username = ? OR UserEmail = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)){
                
                header("location: ../register.php?error=stmtfailed");
                exit();
        }


        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($resultData)){
       return $row;


        }

        else{
                $result = false;
                return $result;
        }

        mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $username, $pwd ){



        $sql = " INSERT INTO LoginDetails (Username, Password, UserEmail, UserFullName) VALUES (?,?,?,?);";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);


        if(!$stmt->prepare($sql)){
  die($conn->error);
}
/**
        if (!mysqli_stmt_prepare($stmt, $sql)){

                header("location: ../register.php?error=stmtfailed");
                exit();
        }
        **/


        $stmt->bind_param("ssss", $username, $pwd, $email, $name);
        $stmt->execute();
        $stmt->store_result();
        mysqli_stmt_close($stmt);
        header("location: ../register.php?error=none");
        exit();
}

function emptyInputLogin($username, $pwd) {

        $result;
        if ( empty($username) || empty($pwd)) {

                $result = true;
        }
        else {
                $result = false;
        }

        return $result;

}


function loginUser($conn, $username, $pwd){
        $uidExists =uidExists($conn, $username, $username);

        if ($uidExists === false){
                header("location: ../login.php?error=wronglogin1");
                exit();
        }
        $pwdHashed = $uidExists["Password"];

        $checkPwd = strcmp($pwd, $pwdHashed);
        if ($checkPwd === 0) {

                session_start();
                $_SESSION["userName"]= $uidExists["Username"];
                header("location: ../index.php");
                exit();
        }
        else {

                header("location: ../login.php?error=wronglogin2");
                exit();
        }



}

function petSurrender($conn, $username,$lname, $fname,$address, $contact, $pettype, $petname, $petbreed, $petage, $petgender ){


        $sql = " INSERT INTO PetSurrender (fname, lname, address, Username, contact, pet_type, pet_name, pet_age, pet_gender, pet_breed) VALUES (?,?,?,?,?,?,?,?,?,?);";
        $stmt = $conn->stmt_init();
        $stmt->prepare($sql);


        if(!$stmt->prepare($sql)){
  die($conn->error);
}
/**
        if (!mysqli_stmt_prepare($stmt, $sql)){

                header("location: ../register.php?error=stmtfailed");
                exit();
        }
        **/


        $stmt->bind_param("ssssssssss",$lname, $fname, $address,  $username, $contact, $pettype, $petname,$petage, $petgender, $petbreed);
        $stmt->execute();
        $stmt->store_result();
        mysqli_stmt_close($stmt);
        header("location: ../surender.php?error=none");
        exit();
}
