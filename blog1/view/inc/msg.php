<?php
?>
<?php if (!empty($this->sErrMsg)) : ?> 
<p class="error">?=$this->sErrMsg?>
    <?php endif ?>
<?php if (!empty($this->sSuccMsg)) : ?>
<p class="success"><?=$this->sSuccMsg?></p>
<?php endif; ?>

