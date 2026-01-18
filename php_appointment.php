<?php
include 'config.php';


if($_SERVER["REQUEST_METHOD"] == "POST"){
$gname=$_POST['name'];
$gemail=$_POST['email'];
$cname=$_POST['childname'];
$cage=$_POST['childage'];
$msg=$_POST['msg'];

    $sql="INSERT INTO `appointment` (`name`,`email`,`childname`,`childage`,`msg`) VALUES('$gname','$gemail','$cname','$cage','$msg')";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Value inserted";
        // header('Location:contact.php');

        echo '<script>
        setTimeout(function(){
        window.location.assign("appointment.php");
    },0);
        </script>';
    }

    else{
        echo"Failed to insert";
    }
    
}


?>