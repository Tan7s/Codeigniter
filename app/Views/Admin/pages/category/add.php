<body class="cnt-home">
    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <div class="col-md-12 col-sm-6 create-new-account">
                        <div class="container">

                            <h2>Tạo danh mục mới</h2>

                            <form action="admin\category\create" method="POST" id="register-form">
                               <?=view('message/message')?>
                                <div class="form-group">
                                    <label for="username">Tên danh mục</label>
                                    <input value="<?= old('username') ?>" type="text" class="form-control input-dangky"
                                        id="name" name="name" placeholder="Nhập tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="email">Meta:</label>
                                    <input value="<?= old('email') ?>" type="text" class="form-control input-dangky"
                                        id="email" name="meta" placeholder="Nhập meta danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="password">Partnert</label>
                                    <input value="<?= old('password') ?>" type="text"
                                        class="form-control input-dangky" id="password" name="partnert"
                                        placeholder="Nhập partnert">
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Type</label>
                                    <input value="<?= old('confirm_password') ?>" type="text"
                                        class="form-control input-dangky" id="confirm_password" name="type"
                                        placeholder="Nhập loại danh mục">
                                        
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Tạo Tài Khoản</button>
                            </form>
                        </div>
                    </div>
                    <!-- create a new account -->
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
        </div><!-- /.container -->
    </div><!-- /.body-content -->