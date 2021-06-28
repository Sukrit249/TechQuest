<?php 
  require_once 'php/includes/header.inc.php'; 
  require_once 'php/functions.php'; 
?>
<!-- get a js array of all folders in quiz/custom using json_encode on scandir -->

<script>
  var quizzes = <?php echo json_encode(scandir("quiz/custom/")); ?>;
  console.log(quizzes);
</script>

<div id="creator">
  <form id="form" action="php/create_validation.php" method="POST">
    <label for="title">Enter a Title for your Quiz:</label>
    <input type="text" name="title" id="title" onkeyup="EnableDisable(this)"><br>
    <label for="author">Enter your Name:</label>
    <input type="text" name="author" id="author" onkeyup="EnableDisable(this)"><br>
    <div id="step2">
      <p>Select background image:</p>
      <div class="container">
        <div class="cards">  
          <div class="card">
            <div class="img">
              <label for="pic1">
                <input type="radio" id="pic1" name="pic" value="<?php echo "http://$_SERVER[HTTP_HOST]"; ?>/images/q01.jpg" checked><br>
                <img src="images/q01.jpg" class="card-img-top" alt="">
              </label>
            </div>
          </div>
          
          <div class="card">
            <div class="img">
              <label for="pic2">
                <input type="radio" id="pic2" name="pic" value="<?php echo "http://$_SERVER[HTTP_HOST]"; ?>/images/q02.jpg"><br>
                <img src="images/q02.jpg" class="card-img-top" alt="">
              </label>
            </div>
          </div>
          
          <div class="card">
            <div class="img">
              <label for="pic3">
                <input type="radio" id="pic3" name="pic" value="<?php echo "http://$_SERVER[HTTP_HOST]"; ?>/images/q03.jpg"><br>
                <img src="images/q03.jpg" class="card-img-top" alt="">
              </label>
            </div>
          </div>
          
          <div class="card">
            <div class="img">
              <label for="pic4">
                <input type="radio" id="pic4" name="pic" value="<?php echo "http://$_SERVER[HTTP_HOST]"; ?>/images/q04.jpg"><br>
                <img src="images/q04.jpg" class="card-img-top" alt="">
              </label>
            </div>
          </div>
          
          <div class="card">
            <div class="img">
              <label for="pic5">
                <input type="radio" id="pic5" name="pic" value="<?php echo "http://$_SERVER[HTTP_HOST]"; ?>/images/q05.jpg"><br>
                <img src="images/q05.jpg" class="card-img-top" alt="">
              </label>
            </div>
          </div>
        </div>
      </div>
      <p>Enter Questions and Answers:</p><br>
      <div id="qs" class="container">

        <div class="question">
            <div><label for="q1">Enter Question:</label></div>
            <div><input type="text" name="q1" id="q1" onkeyup="checkQuestions()"></div>
            <div><label for="aq1.1">Enter correct answer:</label></div>
            <div><input type="text" name="aq1.1" id="aq1.1" onkeyup="checkQuestions()"></div>
            <div><label for="aq1.2">Enter a wrong answer:</label></div>
            <div><input type="text" name="aq1.2" id="aq1.2" onkeyup="checkQuestions()"></div>
            <div><label for="aq1.3">Enter a wrong answer:</label></div>
            <div><input type="text" name="aq1.3" id="aq1.3" onkeyup="checkQuestions()"></div>
        </div>
        <hr>
        <div class="question">
          <div><label for="q2">Enter Question:</label></div>
          <div><input type="text" name="q2" id="q2" onkeyup="checkQuestions()"></div>
          <div><label for="aq2.1">Enter correct answer:</label></div>
          <div><input type="text" name="aq2.1" id="aq2.1" onkeyup="checkQuestions()"></div>
          <div><label for="aq2.2">Enter a wrong answer:</label></div>
          <div><input type="text" name="aq2.2" id="aq2.2" onkeyup="checkQuestions()"></div>
          <div><label for="aq2.3">Enter a wrong answer:</label></div>
          <div><input type="text" name="aq2.3" id="aq2.3" onkeyup="checkQuestions()"></div>
        </div>
        <hr>
        <div class="question">
          <div><label for="q3">Enter Question:</label></div>
          <div><input type="text" name="q3" id="q3" onkeyup="checkQuestions()"></div>
          <div><label for="aq3.1">Enter correct answer:</label></div>
          <div><input type="text" name="aq3.1" id="aq3.1" onkeyup="checkQuestions()"></div>
          <div><label for="aq3.2">Enter a wrong answer:</label></div>
          <div><input type="text" name="aq3.2" id="aq3.2" onkeyup="checkQuestions()"></div>
          <div><label for="aq3.3">Enter a wrong answer:</label></div>
          <div><input type="text" name="aq3.3" id="aq3.3" onkeyup="checkQuestions()"></div>
        </div>

      </div>
    </div>
    <div class="container">
      <button id="save_quiz" name="save_quiz" value="submit" class="btn btn-primary" onclick="submitButtonClick(event)" disabled>Create the Quiz</button>
    </div>

  </form>
  <div class="container">
    <button id="addQuestion" name="addQuestion" class="btn btn-primary" onclick="addQuestion()">add a Quetion</button>
    <button id="create_quiz" name="create_quiz" class="btn btn-primary" onclick="nextStep(this)" disabled>Next Step</button>
  </div>

</div>
<?php
  require_once 'php/includes/footer.inc.php'; 
?>