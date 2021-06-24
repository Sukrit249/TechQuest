<?php 
  require_once '../php/includes/header.inc.php';       // Includes the header
  require_once '../php/functions.php';                 // Includes the functions.php
  require_once '../quiz/regular/git/create.php';       // Path to the php file where the 3 arrays are set
  ?>
  <!-- Page content stats here -->


<form action= "quizgit.php" method="post">
<!--front cart-->
    <div class="Quiz">
       <?php echo $qs[0][0];?>
    </div>
<!--back cart-->
          <div class="answer">
                <input class="answer" type="radio" name="aw" value="1" required="required">
                  <?php echo $as [0][0];?>
                  <br>
                <input class="answer" type="radio" name="aw" value="1" required="required">
            <?php echo $as [0][1];?>
          </div>
            <div class="Submit">
              <input class="Submit" type="submit" value="Next">
                <a href="next.php"></a>
            </div>
</from>

<form action= "quizgit.php" method="post">
<!--front cart-->
    <div class="Quiz">
       <?php echo $qs[2][0];?>
    </div>
<!--back cart-->
      <div class="answer">
              <input class="answer" type="radio" name="aw" value="1" required="required">
                <?php echo $as [1][0];?>
                <br>
              <input class="answer" type="radio" name="aw" value="1" required="required">
           <?php echo $as [1][1];?>
      </div>
        <div class="Submit">
          <input class="Submit" type="submit" value="Next">
            <a href="next.php"></a>
        </div>
<form action= "quizgit.php" method="post">
<!--front cart-->
    <div class="Quiz">
       <?php echo $qs[3][0];?>
    </div>
<!--back cart-->
      <div class="answer">
              <input class="answer" type="radio" name="aw" value="1" required="required">
                <?php echo $as [2][0];?>
                  <br>
              <input class="answer" type="radio" name="aw" value="1" required="required">
           <?php echo $as [2][1];?>
      </div>
        <div class="Submit">
          <input class="Submit" type="submit" value="Next">
            <a href="next.php"></a>
        </div>
</from>

<form class="quizbody" action= "quizgit.php" method="post">
<!--front cart-->
    <div class="Quiz">
       <?php echo $qs[4][0];?>
    </div>
<!--back cart-->
      <div class="answer">
              <input class="answer" type="radio" name="aw" value="1" required="required">
                <?php echo $as [3][0];?>
                  <br>
              <input class="answer" type="radio" name="aw" value="1" required="required">
           <?php echo $as [3][1];?>
      </div>
        <div class="Submit">
            <input class="Submit" type="submit" value="Next">
              <a href="next.php"></a>
        </div>
</from>

<form action= "quizgit.php" method="post">
<!--front cart-->
    <div class="Quiz">
       <?php echo $qs[5][0];?>
    </div>
<!--back cart-->
      <div class="answer">
              <input class="answer" type="radio" name="aw" value="1" required="required">
                <?php echo $as [4][0];?>
                  <br>
              <input class="answer" type="radio" name="aw" value="1" required="required">
           <?php echo $as [4][1];?>
      </div>
        <div class="Submit">
            <input class="Submit" type="submit" value="Next">
              <a href="next.php"></a>
        </div>
</from>



      
  
  <!-- ends here -->
  <!--
    // Just a var_dump that to see whats inside the 3 arrays (need to be deleted befor finishing)
    /*echo '<pre class="pre">';
    echo '$info<br>';
    var_dump($info);
    echo '$qs<br>';
    var_dump($qs);
    echo '$as<br>';
    var_dump($as);
    echo '</pre>';
    // end of the var_dump
    require_once '../php/includes/footer.inc.php';       // Includes the footer */