<?php 
  require_once 'includes/header.inc.php'; 
  require_once 'functions.php'; 

$info = [];
$qs = [];
$as = [];


foreach ($_POST as $key => $value) {
  
  if ($key == "title" || $key == "author" || $key == "pic") {
    if ($key == "title") {
      array_push($info, str_replace(' ', '', strtolower($value)));
    } else {
      array_push($info, $value);
    }
  } else {

    switch (substr($key, 0, 1)) {
      case 'q':
        array_push($qs, [$value]);
        array_push($as, []);
        break;
      case 'a':
        $index = substr($key, 2, 1)-1;
        array_push($as[$index], $value);
        
        if (substr($key, 4, 1) == 1) {
          array_push($qs[$index], $value);
        }
        break;
      
      default:
        # code...
        break;
    }
  }
}
/*
echo "<pre>";
//var_dump($_POST);
echo "<br>INFO <br>";
var_dump($info);
echo "<br> QUESTIONS <br>";
var_dump($qs);
echo "<br> ANSWERS <br>";
var_dump($as);
echo "</pre>";
*/

if (!file_exists('../quiz/custom/'.$info[0])) {
  mkdir('../quiz/custom/'.$info[0]);
}

file_put_contents('../quiz/custom/' . $info[0] . '/info.json', json_encode($info));
file_put_contents('../quiz/custom/' . $info[0] . '/qs.json', json_encode($qs));
file_put_contents('../quiz/custom/' . $info[0] . '/as.json', json_encode($as));
?>
<div class="cContainer">

  <div id="createComplete">
    <h1>Thank you, the quiz has been created</h1>
    
    <a class="btn btn-primary" href="index.php">Home</a>
  </div>
</div>
  
<?php
  require_once 'includes/footer.inc.php'; 
?>