<?php 
     session_start();

     unset ($_SESSION['email']);
     unset ($_SESSION['passeord']);

     session_destroy();
     
     header("Location:index.php");
     
?>