<body class="cnt-home">
    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <div class="col-md-12 col-sm-6 create-new-account">
                        <div class="container">

                            <h2>Tạo tài khoản mới</h2>

                            <form action="admin\user\create" method="POST" id="register-form">
                               <?=view('message/message')?>
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input value="<?= old('username') ?>" type="text" class="form-control input-dangky"
                                        id="name" name="username" placeholder="Nhập họ và tên">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input value="<?= old('email') ?>" type="email" class="form-control input-dangky"
                                        id="email" name="email" placeholder="Nhập địa chỉ email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input value="<?= old('password') ?>" type="password"
                                        class="form-control input-dangky" id="password" name="password"
                                        placeholder="Nhập mật khẩu">
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Repeat your password</label>
                                    <input value="<?= old('confirm_password') ?>" type="password"
                                        class="form-control input-dangky" id="confirm_password" name="confirm_password"
                                        placeholder="Nhập lại mật khẩu">
                                        
                                </div>
                                <input type="hidden" id="type" name="loai" value="1">
                                <button type="submit" class="btn btn-primary">Tạo Tài Khoản</button>
                            </form>
                        </div>
                    </div>
                    <!-- create a new account -->
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
        </div><!-- /.container -->
    </div><!-- /.body-content -->