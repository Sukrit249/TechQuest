<?php
  session_start();  //starting/continue the session
  include '../quiz/regular/git/create.php';
 

  
  if(!isset($_POST['A'])) {                                                 // if no value in $_POST['A'] is submited
    header('Location: quiz_git.php');                                         // load the quiz page 
  } else {                                                                  
    // array_push($_SESSION['inputs'], $_POST['A']);   // add the input given by the client to the $_SESSION['inputs'] array
    if($qs[$_SESSION['quiz_counter']][1] == $_POST['A']){
      $_SESSION['score']++;
    }
    $_SESSION['quiz_counter']++;
                                               // add 1 to the question counter
    if ($_SESSION['quiz_counter'] == count($qs)) {       // if the question counter is equal to the number of elements in the $_SESSION['questions']
      echo "HERE IS YOUR RESULT"; // add validation here and delete echo =)
      session_destroy();                                                     // End the session 
    } else {
      header('Location: quiz_git.php');                                          // load the quiz page
    }
  }
  
  
