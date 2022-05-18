<?php

$server="localhost";
$user="root";
$password="";
$db="charity";

$con=mysqli_connect($server,$user,$password,$db);

if($con){
echo("");
}else{
     echo("connect error");
}
?>
