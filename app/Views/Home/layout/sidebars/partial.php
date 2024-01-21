<?php
$service = new \App\Services\CategoryService;
$result = $service->getAllCategoryByPartner($id);
?>
<?php foreach ($result as $m): ?>

    <div class="col-xs-12 col-sm-12 col-md-2 col-menu">
        <h2 class="title">
        <?= $m['name'] ?>
        </h2>
        <?php echo view('Home/layout/sidebars/partial_child', ['id' => $m['id']]) ?>
    </div>
<?php endforeach ?>