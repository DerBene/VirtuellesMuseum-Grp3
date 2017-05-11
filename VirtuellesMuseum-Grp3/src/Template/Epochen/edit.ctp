<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="epochen form large-9 medium-8 columns content">
    <?= $this->Form->create($epochen) ?>
    <fieldset>
        <legend><?= __('Epochen bearbeiten') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('Start');
            echo $this->Form->control('Ende');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Fertig')) ?>
    <?= $this->Form->end() ?>
</div>
