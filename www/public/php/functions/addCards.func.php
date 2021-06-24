<?php

function addCard($cat) {
    $path = 'quiz/' . $cat . "/";       // creating the path to the regular or custom quizzes by using "regular" or "custom" on calling this function
    $quiz = scandir($path);             // creating an array with all items(files and folders) in the choosen folder(path) including the . and ..
    $quiz = array_splice($quiz, 2, 6);  // get rid of the . and ..
    $quiz = array_values($quiz);        // reseting the indexes starting from 0
   
    foreach ($quiz as $i => $value) {
      # Out put the Card using the variables set in the create.php
      
      if ($cat == 'regular') {
        include_once 'quiz/' . $cat . '/' . $value . "/create.php";
        $link = 'quiz-'. $value . "/quiz_" . $value . '.php';
      } else {
        $info = json_decode(file_get_contents('quiz/' . $cat . '/' .$value . '/info.json'));
        $link = 'quiz.php?quiz=' . $info[0];
      }
      //var_dump($info);
      echo '<div class="card" style="width: 18rem;">
      <img src=' . $info[2] . ' class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">' . $info[0] . ' Quiz</h5>
        <p class="card-text">Created by ' . $info[1] . '</p>
        <a href="quiz-'. $value . "/quiz_" . $value . '.php" class="btn btn-primary">Play Game</a>

      </div>
      </div>';
    }
  }
