
<?php
include_once 'header.php';

?>

<h1> Brisbane Animal Shelter Pet Surrender Form</h1><br>

<!--Second section-->
 <img src="https://images.wallpaperscraft.com/image/single/dog_cat_kitten_puppy_grass_65389_800x1420.jpg" style="height:600px; margin:30px; float: left;" alt="A pic of dog and cat">
<div style=" margin:30px;">
                        <h2>Pet Detail</h><br>

</div>
                        <label for="pet">Type of pet surrendering:</label><br>
                        <input type="text" name="pet"><br>
                        <label for="petname">Name of the pet:</label><br>
                        <input type="text" name="petname"><br>
                        <label for="petbreed">Breed of pet surrendering:</label><br>
                        <input type="text" name="petbreed"><br>
                        <label for="petage">Age of pet surrendering:</label><br>
                        <input type="text" name="petage"><br>
                        <label for="petgender">Gender of pet surrendering:</label><br>
                        <input type="text" name="petgender"><br><br>

                        <button type="submit" name="submit">Submit Form</button>


</form>

<?php

if (isset($_GET["error"])){
        if ($_GET["error"] == "none") {
                echo"<p>We have received your Pet surrender form, you will be contacted shortly!</p>";

        }
        else {
                echo"<p>Something went wrong, please retry!</p>";
        }


}

?>
</div>
</section>
