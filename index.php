<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aplikasi Metode Bisection</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/custom-style.css">
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-dark navbar-dark">

    <a class="navbar-brand" href="index.php">Aplikasi Metode Bisection</a>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php  if (isset($_GET['page'])) { if ($_GET['page']=="number_one") { echo 'active'; } } ?>">
        <a class="nav-link" href="index.php?page=number_one">X<sup>2</sup> - X - 6</a>
      </li>
      <li class="nav-item  <?php  if (isset($_GET['page'])) { if ($_GET['page']=="number_two") { echo 'active'; } } ?>">
        <a class="nav-link" href="index.php?page=number_two">X<sup>3</sup> - X - 6</a>
      </li>
    <li class="nav-item <?php  if (isset($_GET['page'])) { if ($_GET['page']=="number_three") { echo 'active'; } } ?>">
      <a class="nav-link" href="index.php?page=number_three">X<sup>2,5</sup> - x - 6</a>
    </li>
    <li class="nav-item <?php  if (isset($_GET['page'])) { if ($_GET['page']=="number_four") { echo 'active'; } } ?>">
      <a class="nav-link" href="index.php?page=number_four">X<sup>2,5</sup> - x - 65</a>
    </li>
    </ul>
  </nav>

  <div class="container mt-5">
    <?php

      if (isset($_GET['page'])) 
      {
          if ($_GET['page']=="number_one") 
          {
              include 'number_one.php';
          }
          elseif ($_GET['page']=="number_two") 
          {
              include 'number_two.php';
          }
          elseif ($_GET['page']=="number_three") 
          {
              include 'number_three.php';
          }
          elseif ($_GET['page']=="number_four") 
          {
              include 'number_four.php';
          }
      }
      else
      {
          include 'home.php';  
      }

    ?>
  </div>
 
</body>
</html>