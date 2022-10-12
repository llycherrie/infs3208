<?php
 include_once 'header.php';
?>


        <h2>Not a member yet? Sign up to join us!</h>

<!--Second section-->
        <img src="https://media.istockphoto.com/photos/happy-mixed-breed-dog-posing-with-a-kitten-on-his-head-picture-id1210341751?k=20&m=1210341751&s=612x612&w=0&h=v0Dw0214h_1zUG1bZTXx8IG0QwfOwi3Iqd52QNii6ZI=" style="height:600px; margin:30px; float: left;" alt="A pic of dog and cat">

        <div style=" height:600px; margin:30px;">
                <form action="includes/signup.inc.php" method="post">
                        <input type="text" name="name" placeholder="Full name..."><br>
                         <input type="text" name="email" placeholder="email..."><br>
                         <input type="text" name="username" placeholder="Username..."><br>
                         <input type="password" name="pwd" placeholder="Password..."><br>
                        <input type="password" name="pwdRepeat" placeholder="Repeat Password..."><br><br>
                        <button type="submit" name="submit">Sign Up</button>


</form>

<?php

if (isset($_GET["error"])){
        if ($_GET["error"] == "none") {
                echo"<p>You have signed up! You can login now!</p>";

        }
        else {
                echo"<p>Something went wrong, please retry!</p>";
        }


}

?>
</div>
</section>
