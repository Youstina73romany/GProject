<?php 

$host= 'localhost';
$user='root';
$pass='';
$db='bento';

$con=mysqli_connect($host,$user,$pass,$db);
if($con)
    echo 'connected successfully to bento database';
    ?>

