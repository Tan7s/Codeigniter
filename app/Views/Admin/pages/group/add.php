<body class="cnt-home">
    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <div class="col-md-12 col-sm-6 create-new-account">
                        <div class="container">

                            <h2>Tạo Group mới</h2>

                            <form action="admin\group\create" method="POST" id="register-form">
                               <?=view('message/message')?>
                                <div class="form-group">
                                    <label for="username">Tên group</label>
                                    <input value="<?= old('username') ?>" type="text" class="form-control input-dangky"
                                        id="name" name="name" placeholder="Nhập tên danh mục">
                                </div>
                                
                                
                                <button type="submit" class="btn btn-primary">Tạo group</button>
                            </form>
                        </div>
                    </div>
                    <!-- create a new account -->
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
        </div><!-- /.container -->
    </div><!-- /.body-content -->