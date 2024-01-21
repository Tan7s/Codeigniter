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
                        <th>Meta</th>
                        <th>Partnert</th>
                        <th>Type</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Meta</th>
                        <th>Partnert</th>
                        <th>Type</th>
                        <th>Chức Năng</th>

                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($categorys as $category): ?>
                        <tr>
                            <td>
                                <?= $category['id'] ?>
                            </td>
                            <td>
                                <?= $category['name'] ?>
                            </td>
                            <td>
                                <?= $category['meta'] ?>
                            </td>
                            <td>
                                <?= $category['partnert'] ?>
                            </td>
                            <td>
                                <?= $category['type'] ?>
                            </td>
                            <td>
                                <a href="admin/category/edit/<?= $category['id'] ?>" class="btn btn-primary"><i
                                        class="fas fa-edit"></i></a>
                                <a data-url="<?= base_url() ?>admin/category/delete/<?= $category['id'] ?>"
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