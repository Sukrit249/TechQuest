<?php 
  require_once '../php/includes/header.inc.php';       // Includes the header
  require_once '../php/functions.php';             // Includes the functions.php
  require_once '../quiz/regular/sass/create.php';   // Path to the php file where the 3 arrays are set
 
  //test


  //end test

function btnClick() {

}


 function runQuestion($num) {
   global $qa;
    echo '<h4>' . $qa[$num][0] . '</h4>';
    echo "<br><ul>";
    for ($aText = 0; $aText < 3; $aText++) {
      echo '<button type="button" class="btn" name="' . $num. '-answers" value="' . $qa[$num][1][$aText][1] . '">' . $qa[$num][1][$aText][0] . '</button>';
    }

    
 }

//  $score = 0;

//  foreach ($variable as $key => $value) {
//    # code...
//  }



  ?>

  <div class="quizStack">

    <div class="sass-intro">
      <h2>SASS Quiz</h2>
      <p class="freebie">Freebie: Sass stands for Syntactically Awesome Style Sheet.<br>
        This is a short quiz on some basics which can be found on the <a href="https://sass-lang.com/documentation">Sass</a> 
        website. If you get stuck, you can read up and probably find the answer.
        </p>
    </div>
    
    <form action="quiz_sass.php" method="POST">

      <div class="quizContainer">
        <div class="qText">
          <h3>Question 1</h3>
          <?php
           runQuestion(0);
          ?>
          </div>
          <div class="qText">
          <h3>Question 2</h3>

          <?php
           runQuestion(1);
          ?>
          </div>
          <div class="qText">
          <h3>Question 3</h3>

          <?php
           runQuestion(2);
          ?>
          </div>
          <div class="qText">
          <h3>Question 4</h3>

          <?php
           runQuestion(3);
          ?>
          </div>
          <div class="qText">
          <h3>Question 5</h3>

          <?php
           runQuestion(4);
          ?>
          </div>
          <div class="qText">
          <h3>Question 6</h3>

          <?php
           runQuestion(5);
          ?>
          </div>
          <div class="qText">
          <h3>Question 7</h3>

          <?php
           runQuestion(6);
          ?>
          </div>
          <div class="qText">
          <h3>Question 8</h3>

          <?php
           runQuestion(7);
          ?>
          </div>
          <div class="qText">
          <h3>Question 9</h3>

          <?php
           runQuestion(8);
          ?>
          </div>
          <div class="qText">
          <h3>Question 10</h3>

          <?php
           runQuestion(9);
          ?>
          </div>

      </div>

      <button type="submit" class="btn" value="Finished">Finished</button>


    </form> 
  </div>

  <?php
    require_once '../php/includes/footer.inc.php';       // Includes the footer
    ?>