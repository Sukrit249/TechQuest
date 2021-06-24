<?php 
  require_once '../php/includes/header.inc.php';       // Includes the header
  require_once '../php/functions.php';                 // Includes the functions.php
  require_once '../quiz/regular/git/create.php';       // Path to the php file where the 3 arrays are set
  ?>

<form action= "quizgit.php" method="post">

<div class="Submit">
          <input class="Submit" type="submit" value="Next">
        </div>
<?php

function nextQuestion ($nextquestion){
    switch($nextquestion){
        case($qs[0][0]):
            return($qs[1][1]);

        }
    
}