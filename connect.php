<?php
$con=mysqli_connect('localhost','root','','mystore');
if($con){
    echo"connection successful";
}
else{
    die(mysqli_error($con));
}
?>