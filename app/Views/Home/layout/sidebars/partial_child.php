<?php
$service = new \App\Services\CategoryService;
$result = $service->getAllCategoryByPartner($id);
?>
<?php foreach ($result as $m): ?>
    <ul class="links">
        <li><a href=""><?= $m['name'] ?></a></li>
    </ul>
<?php endforeach ?>