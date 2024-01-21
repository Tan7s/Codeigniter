<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Chỉnh Sửa Group</h4>
                </div>
                <form action="admin\group\update" method="POST">
                    <?= view('message/message') ?>
                    <input name="id" type="hidden" value="<?= $group['id'] ?>">
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="labels">Tên Group</label>
                            <input name="name" type="text" class="form-control" placeholder="enter phone number"
                                value="<?= $group['name'] ?>">
                        </div>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Lưu Thông Tin</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
