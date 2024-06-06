<?php
session_start();
include "db.php";
$msg=$_GET["msg"];
$phone=$_SESSION["phone"];
$q="SELECT * FROM `users` WHERE  phone='$phone'";
if($rq=mysqli_query($db,$q)){
    if(mysqli_num_rows($rq)==1){
 $q="INSERT INTO `msg`( `msg`, `phone`) VALUES ('$msg','$phone')";
$rq=mysqli_query($db,$q);

    

}}



?>