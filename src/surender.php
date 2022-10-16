<?php
 include_once 'header.php';
?>


        <h2>Pet Surrender Form</h>

<!--Second section-->

        <div style=" height:600px; margin:30px;">
                <form action="include/surrender.inc.php" method="post">
                        <h2>Owner Detail</h>

                         <label for="fname">First name:</label><br>
                        <input type="text" id="fname" name="fname"><br>
                        <label for="lname">Last name:</label><br>
                        <input type="text" id="lname" name="lname">
                        <label for="username">Username:</label><br>
                        <input type="text" name="username"><br>
                        <label for="address">Address:</label><br>
                        <input type="text" name="address"><br>
                        <label for="contact">Contact Number:</label><br>
                        <input type="text" name="contact"><br>


                        <h2>Pet Detail</h>
                        <label for="pet">Type of pet surrendering:</label><br>
                        <input type="text" name="pet"><br>
                        <label for="petname">Name of the pet:</label><br>
                        <input type="text" name="petname"><br>
                        <label for="petbreed">Breed of pet surrendering:</label><br>
                        <input type="text" name="petbreed"><br>
                        <label for="petage">Age of pet surrendering:</label><br>
                        <input type="text" name="petage"><br>
                        <label for="petgender">Gender of pet surrendering:</label><br>
                        <input type="text" name="petgender"><br>

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
