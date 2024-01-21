<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Chỉnh Sửa Sản Phẩm</h4>
                </div>
                <form action="admin/product/update" method="POST" id="register-form" enctype="multipart/form-data">
                    <?= view('message/message') ?>
                    <input name="id" type="hidden" value="<?= $product['id'] ?>">
                    <div class="row image-row mt-2">
                        <div class="col-md-6 mb-0">
                            <label name="name" class="labels">Tên sản phẩm</label>
                            <input name="name" type="text" class="form-control" value="<?= $product['name'] ?>">
                        </div>
                        <div class="col-md-6 mb-0">

                            <div class="row image-row">
                               
                                <div class="col-md-3 smn">
                                <img name="price" class="img-update"
                                        src="assets/images/products/<?= $product['image'] ?>" alt="Product Image">
                                </div>
                                <div class="input-group col-md-9">
                                    <div class="row"> <label class="labels">Hình ảnh</label></div>
                                    <div class="row">  <input name="image" type="file" class="form-control" id="customFile" value=""></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label name="price" class="labels">Giá</label>
                            <input name="price" type="text" class="form-control" placeholder="Nhập giá sản phẩm"
                                value="<?= $product['price'] ?>">
                        </div>
                        <div class="col-md-4">
                            <label name="group_id" class="labels">Group id</label>
                            <input name="group_id" type="text" class="form-control" placeholder="Nhập ID group"
                                value="<?= $product['group_id'] ?>">
                        </div>
                        <div class="col-md-4">
                            <label name="category_id" class="labels">Category ID</label>
                            <input name="category_id" type="text" class="form-control" placeholder="Nhập ID group"
                                value="<?= $product['category_id'] ?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label name="sale" class="labels">Sale</label>
                            <input name="sale" type="text" class="form-control" placeholder="Nhập giá sale" value="<?= $product['sale'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label name="type" class="labels">Loại</label>
                            <input name="type" type="text" class="form-control" placeholder="Nhập loại sản phẩm"
                                value="<?= $product['type'] ?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <label class="labels">Mô tả</label>
                            <textarea name="discription"><?= $product['discription'] ?></textarea>
                            <script>
                                CKEDITOR.replace('discription');
                            </script>
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Lưu thông tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>