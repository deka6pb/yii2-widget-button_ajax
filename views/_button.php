<script>
    var btnOnClickClass = '<?=$uniqueClass?>';
</script>
<?php
use deka6pb\button_ajax\assets\Assets;

Assets::register($this);
?>
<button type="button" class="btn btn-ajax-widget <?= $uniqueClass ?> <?= $btnClass ?>" data-data='<?= $data ?>'
        data-action="<?= $action ?>" data-type="<?= $type ?>" data-original-title="<?= $title ?>">
    <i class="glyphicon <?= $iconClass ?>"></i>
</button>