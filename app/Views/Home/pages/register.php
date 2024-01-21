<!DOCTYPE html>
<html>

<head>
    <title>Đăng ký </title>
    <link rel="stylesheet" type="text/css" href="Login-css/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link href="Admin/css/sb-admin-2.min.css" rel="stylesheet"> -->
</head>

<body>
    <img class="wave" src="Login-css/img/wave.png">
    <div class="container">
        <div class="img">
            <img src="Login-css/img/bg.svg">
        </div>
        <div class="login-content">
            <form action="signup" method="POST">
                <img src="Login-css/img/avatar.svg">
                <h2 class="title">Create Account</h2>
                <div class="div">
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Username</h5>
                            <input type="text" class="input" name="username">
                        </div>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Email</h5>
                            <input type="text" class="input" name="email">
                        </div>
                    </div>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="div">
                            <h5>Password</h5>
                            <input type="text" class="input" name="password">
                        </div>
                    </div>
                    <div class="input-div pass">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="div">
                            <h5>Confirm Password</h5>
                            <input type="password" class="input" name="confirm_password">
                        </div>
                    </div>
                    <?= view('message/message') ?>
                    <a href="login">Đã có tài khoản?</a>
                    <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="Login-css/js/main.js"></script>
    <script src="Admin/vendor/jquery/jquery.min.js"></script>
    <script src="Admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->


</body>

</html>