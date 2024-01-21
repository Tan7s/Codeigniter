<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="keywords" content="MediaCenter, Template, eCommerce">
  <meta name="robots" content="all">
  <title>Giỏ Hàng</title>
  <base href="<?= base_url() ?>">
  <link rel="shortcut icon" href="assets\images\logo.png">
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="assets\css\bootstrap.min.css">

  <!-- Customizable CSS -->
  <link rel="stylesheet" href="assets\css\main.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="assets\css\blue.css">
  <link rel="stylesheet" href="assets\css\owl.carousel.css">
  <link rel="stylesheet" href="assets\css\owl.transitions.css">
  <link rel="stylesheet" href="assets\css\animate.min.css">
  <link rel="stylesheet" href="assets\css\rateit.css">
  <link rel="stylesheet" href="assets\css\bootstrap-select.min.css">

  <!-- Icons/Glyphs -->
  <link rel="stylesheet" href="assets\css\font-awesome.css">

  <!-- Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
    rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>




<body class="cnt-home">

  <?= $header ?>


  <div class="container parent_container" id="parent_container2">
    <?= $content ?> <!--load ra cart_list.php-->
  </div>


  <?= $footer ?>





  <script src="assets\js\jquery-1.11.1.min.js"></script>
  <script src="assets\js\bootstrap.min.js"></script>
  <script src="assets\js\bootstrap-hover-dropdown.min.js"></script>
  <script src="assets\js\owl.carousel.min.js"></script>
  <script src="assets\js\echo.min.js"></script>
  <script src="assets\js\jquery.easing-1.3.min.js"></script>
  <script src="assets\js\bootstrap-slider.min.js"></script>
  <script src="assets\js\jquery.rateit.min.js"></script>
  <script type="text/javascript" src="assets\js\lightbox.min.js"></script>
  <script src="assets\js\bootstrap-select.min.js"></script>
  <script src="assets\js\wow.min.js"></script>
  <script src="assets\js\scripts.js"></script>
  <?php foreach ($jsFiles as $jsLink): ?>
    <script src="<?= $jsLink ?>"></script>
  <?php endforeach ?>
</body>

</html>