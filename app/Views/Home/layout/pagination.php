<?php $pager->setSurroundCount(3) ?>
<div class="clearfix filters-container">
    <div class="text-right">
        <div class="pagination-container">
            <ul class="list-inline list-unstyled">
                <?php if ($pager->hasPrevious()): ?>
                    <li class="prev"><a href="<?= $pager->getFirst() ?>"><i class="fa fa-angle-left"></i><i
                                class="fa fa-angle-left"></i></a></li>
                    <li class="prev"><a href="<?= $pager->getPreviousPage() ?>"><i class="fa fa-angle-left"></i></a></li>
                <?php endif ?>
                <?php foreach ($pager->links() as $link): ?>
                    <li class="<?= $link['active'] ? "active" : "" ?>"><a href="<?= $link['uri'] ?>">
                            <?= $link['title'] ?>
                        </a></li>
                <?php endforeach ?>
                <?php if ($pager->hasNext()): ?>
                    <li class="prev"><a href="<?= $pager->getNextPage() ?>"><i class="fa fa-angle-right"></i></a></li>
                    <li class="next"><a href="<?= $pager->getLast() ?>"><i class="fa fa-angle-right"></i><i
                                class="fa fa-angle-right"></i></a></li>
                <?php endif ?>
            </ul>

        </div>

    </div>


</div>