<?php 
session_start(); //starting, continue the session
include '../quiz/regular/mixed/create.php';

  if(!isset($_POST['A'])) {                                               // if no value in $_POST['A'] is submited
    header('location: quiz_mixed.php');                                   // load the quiz page 
} else {  
  
  if($qs[$_SESSION['quiz_counter']][1] == $_POST['A']) {
    $_SESSION['score']++;
  }
  
  //array_push($_SESSION['inputs'], $_POST['A']);                           // add the input given by the client to the $_SESSION['inputs'] array
  $_SESSION['quiz_counter']++;                                            // add 1 to the question counter
  if ($_SESSION['quiz_counter'] == count($qs)) {                         // if the question counter is equal to the number of elements in the $_SESSION['questions']

    session_destroy();                                                    // End the session 
  } else {
    header('location: quiz_mixed.php');                                         // load the quiz page
  }
}

require_once '../php/includes/header.inc.php';    // Includes the header
require_once '../php/functions.php';              // Includes the functions.php
?>


 <h1><?php echo($_SESSION['score']) . " out of " . count($qs)?></h1>




<?php
require_once '../php/includes/footer.inc.php';    // Includes the footer
?>