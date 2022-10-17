<?php

include_once 'header.php';
?>

<!--Second section-->
        <img src="https://media.istockphoto.com/photos/happy-mixed-breed-dog-posing-with-a-kitten-on-his-head-picture-id1210341751?k=20&m=1210341751&s=612x612&w=0&h=v0Dw0214h_1zUG1bZTXx8IG0QwfOwi3Iqd52QNii6ZI=" style="height:600px; margin:30px; float: left;" alt="A pic of dog and cat">

<div style=" height:600px; margin:30px;">
        <h2>Welcome back! Please login!</h><br>
<section>
<body>
<form action="./include/login.inc.php" method="POST">

                         <input type="text" name="username" placeholder="Username/Email..."><br>
                         <input type="password" name="pwd" placeholder="Password..."><br><br>
                        <input type="submit" name="submit" value = "Submit">


</form>


<?php

if (isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput") {
                echo"<p>Fill in all the fields!</p>";

        }
        else if ($_GET["error"] == "wronglogin") {
                echo"<p>Incorrect information, please retry!</p>";
        }
}
?>
</div>
</section>
