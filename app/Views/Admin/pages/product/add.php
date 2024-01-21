<body class="cnt-home">
    <div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <div class="col-md-12 col-sm-6 create-new-account">
                        <div class="container">

                            <h2>Tạo sản phẩm mới</h2>

                            <form action="admin\product\create" method="POST" id="register-form" enctype="multipart/form-data">
                                <?= view('message/message') ?>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <label name = "name" class="labels">Tên sản phẩm</label>
                                        <input name="name" type="text" class="form-control"
                                            placeholder="Nhập tên sản phẩm" value="<?= old('name') ?>">
                                    </div>
                                    <div class="col-md-6 ">
                                        <label  class="labels">Hình ảnh</label>
                                        <input name = "image" type="file" class="form-control" id="customFile">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <label name = "price" class="labels">Giá</label>
                                        <input name = "price" type="text" class="form-control"
                                            placeholder="Nhập giá sản phẩm" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label name = "group_id" class="labels">Group id</label>
                                        <input name = "group_id" type="text" class="form-control"
                                            placeholder="Nhập ID group" value="">
                                    </div>
                                    <div class="col-md-4">
                                        <label name = "category_id" class="labels">Category ID</label>
                                        <input name = "category_id"  type="text" class="form-control"
                                            placeholder="Nhập ID group" value="">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <label name = "sale" class="labels">Sale</label>
                                        <input name = "sale"  type="text" class="form-control"
                                            placeholder="Nhập giá sale" value="">
                                    </div>
                                    <div class="col-md-6">
                                        <label name = "type"class="labels">type</label>
                                        <input name = "type" type="text" class="form-control"
                                            placeholder="Nhập loại sản phẩm" value="">
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-12">
                                        <label class="labels">Discription</label>
                                        <textarea name="discription"></textarea>
                                        <script>
                                            CKEDITOR.replace('discription');
                                        </script>
                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary">Thêm Sản Phầm</button>
                            </form>
                        </div>
                    </div>
                    <!-- create a new account -->
                </div><!-- /.row -->
            </div><!-- /.sigin-in-->
        </div><!-- /.container -->
    </div><!-- /.body-content -->