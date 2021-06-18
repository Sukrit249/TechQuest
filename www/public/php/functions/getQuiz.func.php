<?php 

function getQuiz($cat) {
  $path = 'quiz/' . $cat . "/";       // creating the path to the regular or custom quizzes by using "regular" or "custom" on calling this function
  $quiz = scandir($path);             // creating an array with all items(files and folders) in the choosen folder(path) including the . and ..
  $quiz = array_splice($quiz, 2, 6);  // get rid of the . and ..
  $quiz = array_values($quiz);        // reseting the indexes starting from 0
  return $quiz;                       // return the array e.g. ["css", "git", "html", "javascript", "php"]
}