<?php

include_once 'header.php';
?>

<!--Second section-->
        <img src="https://media.istockphoto.com/photos/happy-mixed-breed-dog-posing-with-a-kitten-on-his-head-picture-id1210341751?k=20&m=1210341751&s=612x612&w=0&h=v0Dw0214h_1zUG1bZTXx8IG0QwfOwi3Iqd52QNii6ZI=" style="height:600px; margin:30px; float: left;" alt="A pic of dog and cat">

<div style=" height:600px; margin:30px;">
        <h2>Welcome back! Please login!</h><br>

<body>
<form action="" method="POST">

                         <input type="text" name="uid" placeholder="Username/Email..."><br>
                         <input type="password" name="pwd" placeholder="Password..."><br><br>
                        <input type="submit" name="submit" value = "Submit">

</form>

<?php
 include("process.php");
if ($_REQUEST['submit'])
        {
        $name = $_REQUEST['uid'];
        $pass = $_REQUEST['pwd'];
        $obj = $conn->query("SELECT * from LoginDetails WHERE Username='$name' and Password='$pass'");
        echo $obj;
        echo "123";

        if ($obj->num_rows >0){
                ?>
<script type="text/javascript">
window.location.href = "index.php"
;
</script>
<?php

        exit();
}

else
  
  {
        echo "Your username or password is incorrect, please retry!";
}
}
