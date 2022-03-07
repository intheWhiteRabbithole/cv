<!DOCTYPE html>
<html>

<head>
  <meta  charset="UTF-8"/>
    <link rel="stylesheet" href="main.css">
  <title>
      <?php if(isset($title)): ?>
      <?php echo $title;?>
      <?php  else : ?>
      Le Blog de l'Under_dog
      <?php endif ?>
  </title>

</head>

<body>
  <header class="topbar">
    <a class="element-navbar" href="projets.php">Projets</a>
      <a class="element-navbar" href="journal.php">Journal <br>de progression</a>
      <a class="element-navbar" href="stories.php">Stories</a>
      <a class="element-navbar" href="contact.php">Contact</a>
<span class="adresse">
      <a href="">exdragoni@hotmail.fr</a>
      <!--outlook -->
<a href="">alexadb4491@gmail.com</a>
      <!--gmail-->
</span>
    <div class="social">

      <a href="https://github.com/intheWhiteRabbithole/cv"><img class="img1" src="images/github.svg" ></a>
      <a href="https://www.linkedin.com/in/alexandre-dragoni-269527155/"><img class="img2" src="images/linkedin.svg"></a>
</div>
  </header>
