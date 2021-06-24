<?php 
session_start(); // starting/continue the session
// Creating a session array with a question and the correct answer
  require_once '../php/includes/header.inc.php';       // Includes the header
  require_once '../php/functions.php';             // Includes the functions.php
  require_once '../quiz/regular/sass/create.php';   // Path to the php file where the 3 arrays are set
 
  
if (!isset($_SESSION['quiz_counter'])) { // If the $_SESSION['quiz_counter'] is not already set 
  // Creating a session variable with a counter for the question selection
  $_SESSION['quiz_counter'] = 0;

  $_SESSION['score'] = 0;
}
// just a shorter way to get the quiz counter value
$counter = $_SESSION['quiz_counter'];

 function runQuestion($counter) {
   global $qa;
    echo '<h4>' . $qa[$counter][0] . '</h4>';
    echo "<br><ul>";
    for ($aText = 0; $aText < 3; $aText++) {
      echo '<button type="submit" class="btn" name="options" value="' . $qa[$counter][1][$aText][1] . '">' . $qa[$counter][1][$aText][0] . '</button>';
    }
 }

  ?>

  <div class="quizStack">

    <div class="sass-intro">
      <h2>SASS Quiz</h2>
      <p class="freebie">Freebie: Sass stands for Syntactically Awesome Style Sheet.<br>
        This is a short quiz on some basics which can be found on the <a href="https://sass-lang.com/documentation">Sass</a> 
        website. If you get stuck, you can read up and probably find the answer.
        </p>
    </div>
    
    <form action="results_sass.php" method="POST">

      <div class="quizContainer">
        <div class="qText">
          <h3>Question <?php echo $counter + 1?></h3>
          <?php
           runQuestion($counter);
          ?>
          </div>
      </div>

    </form> 
  </div>

  <?php
    require_once '../php/includes/footer.inc.php';       // Includes the footer
    ?>