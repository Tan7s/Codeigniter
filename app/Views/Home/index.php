<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?= base_url() ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="MediaCenter, Template, eCommerce">
    <meta name="robots" content="all">
    <title>
        <?= $title ?>
    </title>
    <base href="<?= base_url() ?>">
    <link rel="shortcut icon" href="assets\images\logo.png">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <link rel="stylesheet" href="assets\css\main.css">
    <link rel="stylesheet" href="assets\css\blue.css">
    <link rel="stylesheet" href="assets\css\owl.carousel.css">
    <link rel="stylesheet" href="assets\css\owl.transitions.css">
    <link rel="stylesheet" href="assets\css\animate.min.css">
    <link rel="stylesheet" href="assets\css\rateit.css">
    <link rel="stylesheet" href="assets\css\bootstrap-select.min.css">
    <link rel="stylesheet" href="assets\css\font-awesome.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800'
        rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>



<div class="ssss">
    <div class="form-container">
        <div class="asd">
            <div class="form-header"><span>Bạn có muốn đăng xuất tài khoản không?</span></div>

            <div class="form-content">
                <span>Chọn đăng xuất bên dưới để đăng xuất tài khoản này</span>
            </div>
            <form action="logout" method="post" id="logoutForm">
          <div class=" form-footer d-grid gap-2">
            <button type="submit" class="btn btn-danger">Logout</button>
            <button type="button" class="btn btn-secondary cancel-bt" onclick="toggleForm()">Cancel</button>
          </div>
        </form>
        </div>

    </div>
</div>


<body class="cnt-home">
    <?= $header ?>
    <div class="body-content outer-top-xs" id="top-banner-and-menu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 sidebar">
                    <?= $sidebar ?>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
                    <?= $content ?>
                </div>
            </div>
        </div>
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