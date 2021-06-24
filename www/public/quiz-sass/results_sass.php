<?php
  session_start(); // starting/continue the session
  
  require_once '../quiz/regular/sass/create.php';

  $_SESSION['quiz_counter']++;
  
  if ($_SESSION['quiz_counter'] == count($qa)) {
    echo "You got " . $_SESSION['score'] . " out of" . count($qa) . " correct!";
  } else {
      header("Location: quiz_sass.php");
  }

?>
  
  
  
