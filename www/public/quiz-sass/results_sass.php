<?php
  session_start(); // starting/continue the session
  
  require_once '../quiz/regular/sass/create.php';

  $_SESSION['quiz_counter']++;

  if ($_SESSION['quiz_counter'] == count($qa)) {
    $score = $_SESSION['score'];
    require_once '../php/includes/header.inc.php';       // Includes the header
  require_once '../php/functions.php';             // Includes the functions.php
    echo "<div class='congrats'> <h3>You got " . $score . " out of" . count($qa) . " correct!</h3>";
    echo '<button type="reset" class="btn-primary">Try Again</button>';
    session_destroy();
  } else {
      header("Location: quiz_sass.php");
  }

?>
  
  
  
