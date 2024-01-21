<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <?= view('message/message') ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Chức Năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($group as $group): ?>
                        <tr>
                            <td>
                                <?= $group['id'] ?>
                            </td>
                            <td>
                                <?= $group['name'] ?>
                            </td>

                            <td>
                                <a href="admin/group/edit/<?= $group['id'] ?>" class="btn btn-primary"><i
                                        class="fas fa-edit"></i></a>
                                <a data-url="<?= base_url() ?>admin/group/delete/<?= $group['id'] ?>"
                                    class="btn btn-danger del_confirm" onclick="del_confirms(this)"><i
                                        class="fas fa-trash"></i></a>



                            </td>

                        </tr>
                    <?php endforeach ?>

                </tbody>
            </table>
        </div>
    </div>
</div>