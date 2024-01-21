
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
                        <th>Image</th>
                        <th>Price</th>
                        <th>Group_id</th>
                        <th>Category_id</th>
                        <th>Sale</th>
                        <th>Oder</th>
                        <th>View</th>
                        <th>Type</th>
                        <th>Discription</th>
                        <th class="cn">Chức Năng</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Group_id</th>
                        <th>Category_id</th>
                        <th>Sale</th>
                        <th>Oder</th>
                        <th>View</th>
                        <th>Type</th>
                        <th>Discription</th>
                        <th class="cn">Chức Năng</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($product as $product): ?>
                        <tr>
                            <td>
                                <?= $product['id'] ?>
                            </td>
                            <td>
                                <?= $product['name'] ?>
                            </td>
                            <td>
                                <img class="img-table" src="assets\images\products\<?= $product['image'] ?>" alt="">
                                
                           
                            </td>
                            <td>
                                <?= $product['price'] ?>
                            </td>
                            <td>
                                <?= $product['group_id'] ?>
                            </td>
                            <td>
                                <?= $product['category_id'] ?>
                            </td>
                            <td>
                                <?= $product['sale'] ?>
                            </td>
                            <td>
                                <?= $product['oder'] ?>
                            </td>
                            <td>
                                <?= $product['view'] ?>
                            </td>
                            <td>
                                <?= $product['type'] ?>
                            </td>
                            <td>
                                <?= $product['discription'] ?>
                            </td>
                            <td >
                                <a href="admin/product/edit/<?= $product['id'] ?>" class="btn btn-primary"><i
                                        class="fas fa-edit"></i></a>
                                <a data-url="<?= base_url() ?>admin/product/delete/<?= $product['id'] ?>"
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