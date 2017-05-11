<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="geographisch form large-9 medium-8 columns content">
    <?= $this->Form->create($geographisch) ?>
    <fieldset>
        <legend><?= __('Edit Geographisch') ?></legend>
        <?php
            echo $this->Form->control('Beschreibung');
            echo $this->Form->control('Ort');
            echo $this->Form->control('Land');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
