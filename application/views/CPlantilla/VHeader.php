<br>
<div class="container">
<?php if (isset($msg)) { ?>
        <!-- Presentacion del mensajes de error-->
        <div class='alert alert-dismissible alert-<?= $tipmsg ?> fade in' data-dismiss="alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <?= $msg ?>
        </div>
<?php } ?>
</div>