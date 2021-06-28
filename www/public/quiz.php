<?php
  session_start();
  require_once 'php/includes/header.inc.php';
  require_once 'php/functions.php';
?>




<?php
if (isset($_GET['quiz'])) {
  $_SESSION['question'] = 1;
  $_SESSION['info'] = json_decode(file_get_contents('quiz/custom/' . $_GET["quiz"] . '/info.json'));
  $_SESSION['qs'] = json_decode(file_get_contents('quiz/custom/' . $_GET["quiz"] . '/qs.json'));
  $_SESSION['as']  = json_decode(file_get_contents('quiz/custom/' . $_GET["quiz"] . '/as.json'));
  $_SESSION['inputs'] = []; 
} else {
  //var_dump($_SESSION);
}





$info = $_SESSION['info'];
$qs = $_SESSION['qs'];
$as = $_SESSION['as'];

?>





<div class="quizStack">
  
  <div class="sass-intro">
    <h2><?php echo $info[0]; ?></h2>
    <p class="freebie">
      Made by <?php echo $info[1]; ?>
    </p>
  </div>
  
  <form action="result.php" method="POST">
    <div class="quizContainer">
      <div class="qText">
        <h3>Question <?php echo $_SESSION['question']?></h3>
        <h4> <?php echo $qs[$_SESSION['question']-1][0]; ?> </h4>
        <br>
            <?php
            shuffle($as[$_SESSION['question'] - 1]);
            //echo '<pre>'; var_dump($as[$_SESSION['question']-1]); echo '</pre>'; 
            $i = 1;
            foreach ($as[$_SESSION['question'] - 1] as $key => $value) {
              //echo "KEY = " . $key . " => " . $value . " ";
              ?>
              <button type="submit" class="btn" name="A" value="<?php echo $value; ?>"><?php echo $value; ?></button> 

              <?php

              $i++;
            }
            ?>
      </div>
    </div>
  </form>
</div>

   

<?php
require_once 'php/includes/footer.inc.php';
?>