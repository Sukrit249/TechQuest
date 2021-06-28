<?php
session_start(); // starting/continue the session

require_once '../php/includes/header.inc.php';    // Includes the header
require_once '../php/functions.php';              // Includes the functions.php
require_once '../php/includes/footer.inc.php';    // Includes the footer

include '../quiz/regular/mixed/create.php';

// Creating an empty array for the answers given by the client
//$_SESSION['inputs'] = [];

if (!isset($_SESSION['quiz_counter'])) { 
// If the $_SEEION['quiz_counter'] is not already set 
// Creating a session variable with a counter for the question selection

  $_SESSION['quiz_counter'] = 0;
  $_SESSION['score'] = 0;
  echo ($_SESSION['quiz_counter']);
}

// just a shorter way to get the quiz counter value
$counter = $_SESSION['quiz_counter'];

?>

<!-- Creating the form for the questions using the elements out of the arrays
   to fill in the text of the answer and the value thats gona be send to the result.php -->


<div class="quizStack">
  
  <div class="sass-intro">
    <h2>Mixed Quiz</h2>
    <p class="freebie">
      Made by Harry Mächler
    </p>
  </div>
  
  <form action="quiz_mixed_result.php" method="POST">
    
    <div class="quizContainer">
      <div class="qText">
        <h3>Question <?php echo $counter + 1?></h3>
        <h4> <?php echo $qs[$counter][0]; ?> </h4>
        <br>         
        <button type="submit" class="btn" name="A" value="<?php echo $as[$counter][0];?>"><?php echo $as[$counter][0];?></button> 
        <button type="submit" class="btn" name="A" value="<?php echo $as[$counter][1];?>"><?php echo $as[$counter][1];?></button> 
        <button type="submit" class="btn" name="A" value="<?php echo $as[$counter][2];?>"><?php echo $as[$counter][2];?></button> 

      </div>
    </div>
        
  </form> 
</div>