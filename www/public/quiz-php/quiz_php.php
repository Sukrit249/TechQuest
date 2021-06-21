<?php 
  require_once '../php/includes/header.inc.php';       // Includes the header
  require_once '../php/functions.php';             // Includes the functions.php
  require_once '../quiz/regular/php/create.php';   // Path to the php file where the 3 arrays are set
?>
<!-- Page content stats here -->

<!-- ends here -->
<h1><?php echo $info[1]; ?></h1>
<?php
  // Just a var_dump that to see whats inside the 3 arrays (need to be deleted befor finishing)
  /*echo '<pre class="pre">';
  echo '$info<br>';
  var_dump($info);
  echo '$qs<br>';
  var_dump($qs);
  echo '$as<br>';
  var_dump($as);
  echo '</pre>';*/

  echo "<h1>" . $info[0] . "</h1>";
  // end of the var_dump
  require_once '../php/includes/footer.inc.php';       // Includes the footer
?>
