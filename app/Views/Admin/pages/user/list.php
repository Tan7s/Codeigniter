<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <?=view('message/message')?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Type</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Type</th>
                        <th>Chức Năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?=$user['id']?></td>
                            <td><?=$user['username']?></td>
                            <td><?=$user['email']?></td>
                            <td><?=$user['password']?></td>
                            <td><?=$user['loai']?></td>
                            <td>
                                <a href="admin/user/edit/<?=$user['id']?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                <a data-url="<?= base_url()?>admin/user/delete/<?=$user['id']?>" class="btn btn-danger del_confirm" onclick="del_confirm(this)"><i class="fas fa-trash"></i></a>
                            </td>

                        </tr>
                    <?php endforeach ?>


                </tbody>
            </table>
        </div>
    </div>
</div>