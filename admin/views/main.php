<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>

<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">DASHBOARD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav nav-pills">
        <?php if(isset($_SESSION['is_logged_in'])) : ?>
        <li class="nav-item">
          <a class="nav-link">Welcome <?php echo $_SESSION['user_data']['user_name']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</a>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </nav>

<br>

  <?php if(isset($_SESSION['is_logged_in'])) : ?>

<div class="row justify-content-between">

  <div class="col-2"> <!-- start left nav -->
    <ul>
      <li>
        <a href="<?php echo ROOT_URL.'dashboard'?>">Dashboard</a>
      </li>
      <li>
        <a href="#">User</a>
      </li>
      <li>
        <a href="#">Recept</a>
      </li>
      <li>
        <a href="#">Sastojak</a>
      </li>
      <li>
        <a href="#">Komentar</a>
      </li>
      <li>
        <a href="#">Ocena</a>
      </li>
      <li>
        <a href="#">Kolicina</a>
      </li>
      <li>
        <a href="#">Slika</a>
      </li>
      <li>
        <a href="#">Setings </a>
      </li>
    </ul>
  </div> <!-- end left nav -->

  <?php endif; ?>

  <div class="col-10">
    <?php Messages::display(); ?>
    <?php require($view); ?>
  </div>

</div>

</div><!-- /.container -->






    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>