<?php
  session_start(); // starting/continue the session
  // Creating a session array with a question and the correct answer

  include '../quiz/regular/git/create.php';

  // Creating an empty array for the $as given by the client
  $_SESSION['inputs'] = [];
  
  if (!isset($_SESSION['quiz_counter'])) { // If the $_SEEION['quiz_counter'] is not already set 
    // Creating a session variable with a counter for the question selection
    $_SESSION['quiz_counter'] = 0;
    $_SESSION['score'] = 0;
  }
  // just a shorter way to get the quiz counter value
  $counter = $_SESSION['quiz_counter'];

?>
  

<!-- Creating the form for the questions using the elements out of the arrays
     to fill in the text of the answer and the value thats gona be send to the result.php -->
<form action="result.php" method="POST">

  <h1><?php $_SESSION['questions'][$counter][0]; ?></h1>

  <input type="radio" name="A" id="A1" value="<?php echo $_SESSION['$as'][$counter][0]; ?>">
  <label for="A1"><?php echo $_SESSION['$as'][$counter][0]; ?></label><br>
  <input type="radio" name="A" id="A2" value="<?php echo $_SESSION['$as'][$counter][1]; ?>">
  <label for="A2"><?php echo $_SESSION['$as'][$counter][1]; ?></label><br>
  <input type="radio" name="A" id="A3" Value="<?php echo $_SESSION['$as'][$counter][1]; ?>">
  <label for="A3"><?php echo $_SESSION['$as'][$counter][2]; ?></label><br>
  <button>SENDEN</button>

</form>
