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
      $score = $_SESSION['score'];
      $total = count($qs);
      session_destroy();                                                     // End the session 
    } else {
      header('Location: quiz_git.php');                                          // load the quiz page
    }
    require_once '../php/includes/header.inc.php';
    require_once '../php/functions.php';
  }
?>
          
<div class='congrats'>
  <div class='row'>
    <h2>Congratulations!!</h2> 
    <h3>You got <span><h2><?php echo $_SESSION['score'];?></h2></span> out of <?php echo count($qs)?> correct!</h3>
    <br><br>
    <a class="btn-primary" href="quiz_git.php">Try Again</a>
    <a class="btn-primary" href="../../index.php">Return Home</a>
  </div>
</div>

<?php
require_once '../php/includes/header.inc.php';
?>