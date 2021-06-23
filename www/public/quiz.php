<?php 
  session_start();
  require_once 'php/includes/header.inc.php'; 
  require_once 'php/functions.php'; 
?>




<?php 
  if(!isset($_SESSION['question'])) {
    $_SESSION['question'] = 1;
  }
  $info = json_decode(file_get_contents('quiz/custom/' .$_GET["quiz"] . '/info.json'));
  $qs = json_decode(file_get_contents('quiz/custom/' .$_GET["quiz"] . '/qs.json'));
  $as = json_decode(file_get_contents('quiz/custom/' .$_GET["quiz"] . '/as.json'));
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
<div class="qcontainer">  
  <div>
    <h1>Question <?php echo $_SESSION['question'];?>:</h1>
  </div>
  <div>
    <h2><?php echo $qs[$_SESSION['question']-1][0]; ?></h2>
  </div>

  <?php 
    shuffle($as[$_SESSION['question']-1]);
    echo '<pre>'; var_dump($as[$_SESSION['question']-1]); echo '</pre>'; 

    foreach ($as[$_SESSION['question']-1] as $key => $value) {
      echo "KEY = " . $key . " => " . $value . " ";
    }

    ?>
</div>


<?php 
  require_once 'php/includes/footer.inc.php'; 
?>