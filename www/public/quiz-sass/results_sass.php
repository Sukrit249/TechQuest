<?php
  session_start(); // starting/continue the session
  
  require_once '../quiz/regular/sass/create.php';

  $_SESSION['quiz_counter']++;
  $_SESSION['score'] = $_SESSION['score'] + intval($_POST['options']);
    //echo $_SESSION['score'];
    // var_dump(intval($_POST['options'])) ;
    // echo "<br><br>";
    // echo "Hello Mirko <br> <br>";

    // echo $_SESSION['score'];
    if ($_SESSION['quiz_counter'] == count($qa)) {
    
      require_once '../php/includes/header.inc.php';       
    require_once '../php/functions.php';            
      echo "<div class='congrats'> <div class='row'>
      <h2>Congratulations!!</h2> 
      <h3>You got <span><h2>" . $_SESSION['score'] . 
      "</h2></span> out of " . count($qa) . " correct!</h3> ";
      echo '<br><br><a class="btn-primary" href="quiz_sass.php">Try Again</a>';
      echo '<a class="btn-primary" href="../index.php">Return Home</a></div></div>';
      session_destroy();
    } else {
        header("Location: quiz_sass.php");
  
    }
  
  ?>
    
    
    
