<?php 
   include ('connection.php') ; ?>
   <?php
   session_start();
   session_destroy();
   header("location:login.php");
   /*if(isset($_GET['logout'])){
    unset($id);
    session_destroy();
    header('location:login.php')}*/
   ?>