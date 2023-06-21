<?php 
   include ('connection.php') ; ?>
   <?php
   if(isset($_GET['logout'])){
    unset($id);
    session_destroy();
    header('location:login.php')
   }
   ?>