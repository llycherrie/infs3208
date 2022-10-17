<?php

session_start();

?>

<!DOCTYPE html>
<html>

        <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation Menu Demo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>

        <body>
                <header>
        <a href="#" class="logo">Brisbane Animal Shelter</a>
                        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="adoption.php">Adoption</a></li>

                <?php
                        if (isset($_SESSION["userName"])){
                                echo "<li><a href='surender.php'>Pet Surrender</a></li>";
                                echo "<li><a href='include/logout.inc.php'>Logout</a></li>";
                        } 
                        else {
                                echo " <li><a href='register.php'>Register</a></li>";
                                echo "<li><a href='login.php'>Login</a></li>";
                        }
?>

            </ul>
        </nav>
    </header>
</body>
</html>
