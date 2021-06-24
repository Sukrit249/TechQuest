<?php
  session_start();
  if(!isset($_SESSION['question'])) {
    header('Location: index.php');
  } else {
    if(!isset($_POST['A'])) {
      header('Location: quiz.php');
    } else {                          
      array_push($_SESSION['inputs'], $_POST['A']);                        // add the input given by the client to the $_SESSION['inputs'] array
      $_SESSION['question']++; 
      if ($_SESSION['question']-1 === count($_SESSION['qs'])) {
        $index = 0;
        $score = 0;
        foreach ($_SESSION['qs'] as $key => $value) {

          if ($value[1] == $_SESSION['inputs'][$index]) {
            $score++;
          }
          $index++;
        }
        $total = count($_SESSION['qs']);
        session_destroy();
      } else {
        header('Location: quiz.php');  
      }
    }
    require_once 'php/includes/header.inc.php';
    require_once 'php/functions.php';
}
?>
<div>
  <h1>Result</h1>
  <h2><?php echo $score . " out of " . $total ?></h2>
  <div>
  <a href="index.php" class="btn btn-primary">Home</a>
  </div>
</div>


<?php
  require_once 'php/includes/header.inc.php';
?>