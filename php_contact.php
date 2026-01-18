<?php
include 'config.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

    $sql="INSERT INTO `form` (`name`,`email`,`subject`,`message`) VALUES('$name','$email','$subject','$message')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Value inserted";
        // header('Location:contact.php');

        echo '<script>
        setTimeout(function(){
        window.location.assign("contact.php");
    },0);
        </script>';
    }

    else{
        echo"Failed to insert";
    }
    
}


?>