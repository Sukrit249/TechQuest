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
/*
    echo '<pre>';
    echo 'Info<br>';
    var_dump($info);
    echo 'Qs<br>';
    var_dump($qs);
    echo 'As<br>';
    var_dump($as);
    echo '<pre>';
  */

?>
<div class="cContainer">
  <div>
    <h1>Question <?php echo $_SESSION['question']; ?>:</h1>
  </div>
  <div>
    <h2><?php echo $qs[$_SESSION['question'] - 1][0]; ?></h2>
  </div>

  <div>
    <form action="result.php" method="POST">
      <?php
      shuffle($as[$_SESSION['question'] - 1]);
      //echo '<pre>'; var_dump($as[$_SESSION['question']-1]); echo '</pre>'; 
      $i = 1;
      foreach ($as[$_SESSION['question'] - 1] as $key => $value) {
        //echo "KEY = " . $key . " => " . $value . " ";
      ?><div>
        <label for="A<?php echo $i; ?>"><?php echo $value; ?></label>
        <input type="radio" name="A" id="A<?php echo $i; ?>" value="<?php echo $value;?>">
      </div>
      <?php

        $i++;
      }
      ?>
      <div>
        <button name="button" value="submited">Send</button>
      </div>
    </form>
  </div>
</div>

<?php
require_once 'php/includes/footer.inc.php';
?>