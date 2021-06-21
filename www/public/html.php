<?php 
  require_once 'includes/header.inc.php';       // Includes the header
  require_once 'php/functions.php';             // Includes the functions.php
  require_once 'quiz/regular/html/create.php';  // Path to the php file where the 3 arrays are set
  ?>
  <!-- Page content stats here -->
  
  <!-- ends here -->
  <?php
    // Just a var_dump that to see whats inside the 3 arrays (need to be deleted befor finishing)
    echo '<pre class="pre">';
    echo '$info<br>';
    var_dump($info);
    echo '$qs<br>';
    var_dump($qs);
    echo '$as<br>';
    var_dump($as);
    echo '</pre>';
    // end of the var_dump
    require_once 'includes/footer.inc.php';       // Includes the footer