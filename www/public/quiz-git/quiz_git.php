<?php 
session_start();
  include '../quiz/regular/git/create.php';
  require_once '../php/includes/header.inc.php';       // Includes the header
  require_once '../php/functions.php';                 // Includes the functions.php
  require_once '../quiz/regular/git/create.php';       // Path to the php file where the 3 arrays are set
  

   
  //$_SESSION['inputs'] = [];
  
  if (!isset($_SESSION['quiz_counter'])) { // If the $_SEEION['quiz_counter'] is not already set 
    // Creating a session variable with a counter for the question selection
    $_SESSION['quiz_counter'] = 0;
    $_SESSION['score'] = 0;
  }
  // just a shorter way to get the quiz counter value
  $counter = $_SESSION['quiz_counter'];
  global $qs;  
  global $as;  

?>
  
  
<!-- Creating the form for the questions using the elements out of the arrays
     to fill in the text of the answer and the value thats gona be send to the result.php -->
<form action="result.php" method="POST">

  <h1>
    <?php
    echo "hi bey";
     echo $qs[$counter][0]; ?>
  </h1>
 
  <input 
    type="radio" 
    name="A" 
    id="A1" 
    value="
      <!-- <?php $as[$counter][0]; ?> -->
    <?php $as[$counter][0];?>
    ">
  <label 
    for="A1">
      <?php echo $as[$counter][0]; ?>
    </label>
    <br>

  <input 
    type="radio" 
    name="A" 
    id="A2" 
    value="
      <?php  $as[$counter][1]; ?>
    ">
  <label 
    for="A2">
     <?php echo $as[$counter][1]; ?>
  </label>
<br>

  <input 
    type="radio" 
    name="A" 
    id="A3" 
    Value="
      <?php  $as[$counter][1]; ?>
    ">
  <label 
    for="A3">
      <?php echo $as[$counter][2]; ?>
</label>
<br>

  <button>SENDEN</button>
</form>




      
  
  <!-- ends here -->
  <!--
    // Just a var_dump that to see whats inside the 3 arrays (need to be deleted befor finishing)
    /*echo '<pre class="pre">';
    echo '$info<br>';
    var_dump($info);
    echo '$qs<br>';
    var_dump($qs);
    echo '$as<br>';
    var_dump($as);
    echo '</pre>';
    // end of the var_dump
    require_once '../php/includes/footer.inc.php';       // Includes the footer */