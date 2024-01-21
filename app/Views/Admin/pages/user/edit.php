<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-12 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Chỉnh Sửa User</h4>
                </div>
                <form action="admin\user\update" method="POST">
                    <?= view('message/message') ?>
                    <input name="id" type="hidden" value="<?= $user['id'] ?>">
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <label class="labels">Tên tài khoản</label>
                            <input name="username" type="text" class="form-control" placeholder="enter phone number"
                                value="<?= $user['username'] ?>">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6">
                            <label class="labels">Email</label>
                            <input name="email" type="text" class="form-control" placeholder="enter phone number"
                                value="<?= $user['email'] ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="browser" class="form-label ">Loại tài khoản</label>
                            <select name="loai" class="form-control">
                                <option value="1" <?php if ($user['loai'] === 1) echo ("selected");?> > 1 </option>
                                <option value="2" <?php if ($user['loai'] === 2) echo ("selected");?>> 2 </option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6" id="password" style="display:none">
                            <label class="labels">Mật Khẩu</label>
                            <input id="input_password" name="password" type="password" class="form-control" value="">
                        </div>
                        <div class="col-md-6" id="confirm_password" style="display:none">
                            <label class="labels">Xác nhận mật khẩu</label>
                            <input id="input_confirm_password" name="confirm_password" type="text" class="form-control"
                                value="">
                        </div>
                    </div>
                    <div class="form-check mt-3">
                        <input name="change_password" class="form-check-input " type="checkbox" id="change_password">
                        <label class="form-check-label " for="flexCheckDefault">
                            Thay đổi mật khẩu
                        </label>
                    </div>
                    <div class="mt-5 text-center">
                        <button class="btn btn-primary profile-button" type="submit">Save Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>