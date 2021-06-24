<?php 
  session_start();
  //echo "Status = " . session_status() . "<br>";
 
  //echo "Status = " . session_status() . "<br>";

  //var_dump($_SESSION);
  require_once 'php/includes/header.inc.php'; 

  require_once 'php/functions.php';





  addCard("regular");


  addCard("custom");
  

  require_once 'php/includes/footer.inc.php'; 
?>