<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Include Exercise</title>
  <link rel="stylesheet" href="<?php echo "http://$_SERVER[HTTP_HOST]"; ?>/build/css/style.css">
  <script src="js/addQ.js"></script>
</head>
  
<body>

  <header>
    <div class="container">
      <div class="row">
        <div class="logo-title">
          <a class="logo" href="<?php echo "http://$_SERVER[HTTP_HOST]"; ?>/index.php"><div><img src="<?php echo "http://$_SERVER[HTTP_HOST]"; ?>/images/logo-tq.svg"><h1>techQuest</h1></div></a>
          
        </div>

        <div class="tagline">
          <p>Welcome to Your Quest for Knowledge!</p>
        </div>

        <div class="makeit">
          <a href="<?php echo "http://$_SERVER[HTTP_HOST]"; ?>/quiz_creator.php" class="btn-primary">Create Your Own Quiz!</a></li>
        </div>  
      </div>
    </div>
  </header>

  <main class="quizzes">


