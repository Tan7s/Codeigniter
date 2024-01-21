<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Chỉnh Sửa Danh Mục</h4>
                </div>
                <form action="admin\category\update" method="POST">
                    <?= view('message/message') ?>
                    <input name="id" type="hidden" value="<?= $category['id'] ?>">
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="labels">Tên Category</label>
                            <input name="name" type="text" class="form-control" placeholder="enter phone number"
                                value="<?= $category['name'] ?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <label class="labels">Meta</label>
                            <input name="meta" type="text" class="form-control" placeholder="enter phone number"
                                value="<?= $category['meta'] ?>">
                        </div>
                        <div class="col-md-4">
                            <label class="labels">Partnert</label>
                            <input name="partnert" type="text" class="form-control" placeholder="enter phone number"
                                value="<?= $category['partnert'] ?>">
                        </div>
                        <div class="col-md-4">
                            <label class="labels">Loại</label>
                            <input name="type" type="text" class="form-control" placeholder="enter phone number"
                                value="<?= $category['type'] ?>">
                        </div>
                    </div>
               
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Lưu Danh Mục</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
