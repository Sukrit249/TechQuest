<?php 
  require_once 'php/includes/header.inc.php'; 
  require_once 'php/functions.php'; 
?>
<!-- get a js array of all folders in quiz/custom using json_encode on scandir -->

<script>
  var quizzes = <?php echo json_encode(scandir("quiz/custom/")); ?>;
  console.log(quizzes);
</script>

<div>
  <form action="#" method="POST">
    <label for="title">Enter a Title for your Quiz</label>
    <input type="text" name="title" id="title" onkeyup="EnableDisable(this)"><br>
    <label for="author">Enter your Name</label>
    <input type="author" name="author" id="author" onkeyup="EnableDisable(this)"><br>
    <div id="step2">
      <p>Select background image:</p>
      <div class="container">
        
        <div class="card" style="width: 18rem;">
          <div class="img">
            <label for="pic1">
              <input type="radio" id="pic1" name="drone" value="pic1" checked><br>
              <img src="/images/tiger_filler.jpg" class="card-img-top" alt="">
            </label>
          </div>
        </div>
        
        <div class="card" style="width: 18rem;">
          <div class="img">
            <label for="pic2">
              <input type="radio" id="pic2" name="drone" value="pic2"><br>
              <img src="/images/tiger_filler.jpg" class="card-img-top" alt="">
            </label>
          </div>
        </div>
        
        <div class="card" style="width: 18rem;">
          <div class="img">
            <label for="pic3">
              <input type="radio" id="pic3" name="drone" value="pic3"><br>
              <img src="/images/tiger_filler.jpg" class="card-img-top" alt="">
            </label>
          </div>
        </div>
        
        <div class="card" style="width: 18rem;">
          <div class="img">
            <label for="pic4">
              <input type="radio" id="pic4" name="drone" value="pic4"><br>
              <img src="/images/tiger_filler.jpg" class="card-img-top" alt="">
            </label>
          </div>
        </div>
        
        <div class="card" style="width: 18rem;">
          <div class="img">
            <label for="pic5">
              <input type="radio" id="pic5" name="drone" value="pic5"><br>
              <img src="/images/tiger_filler.jpg" class="card-img-top" alt="">
            </label>
          </div>
        </div>

      </div>
      <p>Enter Questions and Answers:</p><br>
      <div class="container">

        <div class="question">
          <label for="q1">Enter Question:</label>
          <input type="text" name="q1" id="q1" onkeyup="checkQuestions()"><br>
          <label for="aq1.1">Enter correct answer:</label>
          <input type="text" name="aq1.1" id="aq1.1" onkeyup="checkQuestions()"><br>
          <label for="aq1.2">Enter a wrong answer:</label>
          <input type="text" name="aq1.2" id="aq1.2" onkeyup="checkQuestions()"><br>
          <label for="aq1.3">Enter a wrong answer:</label>
          <input type="text" name="aq1.3" id="aq1.3" onkeyup="checkQuestions()"><br>
        </div>
        <div class="question">
          <label for="q2">Enter Question:</label>
          <input type="text" name="q2" id="q2" onkeyup="checkQuestions()"><br>
          <label for="aq2.1">Enter correct answer:</label>
          <input type="text" name="aq2.1" id="aq2.1" onkeyup="checkQuestions()"><br>
          <label for="aq2.2">Enter a wrong answer:</label>
          <input type="text" name="aq2.2" id="aq2.2" onkeyup="checkQuestions()"><br>
          <label for="aq2.3">Enter a wrong answer:</label>
          <input type="text" name="aq2.3" id="aq2.3" onkeyup="checkQuestions()"><br>
        </div>

        <div class="question">
          <label for="q3">Enter Question:</label>
          <input type="text" name="q3" id="q3"><br>
          <label for="aq3.1">Enter correct answer:</label>
          <input type="text" name="aq3.1" id="aq3.1" onkeyup="checkQuestions()"><br>
          <label for="aq3.2">Enter a wrong answer:</label>
          <input type="text" name="aq3.2" id="aq3.2" onkeyup="checkQuestions()"><br>
          <label for="aq3.3">Enter a wrong answer:</label>
          <input type="text" name="aq3.3" id="aq3.3" onkeyup="checkQuestions()"><br>
        </div>

      </div>
    </div>
    <button id="save_quiz" name="save_quiz" value="submit"  disabled>Create the Quiz</button>

  </form>
  <button id="addQuestion" name="addQuestion" onclick="addQuestion()">add a Quetion</button>
  <button id="create_quiz" name="create_quiz" onclick="nextStep(this)" disabled>Next Step</button>

</div>
<?php
  require_once 'php/includes/footer.inc.php'; 
?>