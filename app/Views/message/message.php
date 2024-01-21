<?php if (session('errorsMsg')): ?>
    <?php foreach (session('errorsMsg') as $error): ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>
                <?= $error ?>
            </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php break; ?>
<?php endforeach ?>
<?php endif ?>

<?php if (session('succsessMsg')): ?>
    <?php foreach (session('succsessMsg') as $succsess): ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>
                <?= $succsess ?>
            </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span caria-hidden="true">&times;</span>
            </button>
        </div>
        <?php break; ?>
<?php endforeach ?>

<?php endif ?>