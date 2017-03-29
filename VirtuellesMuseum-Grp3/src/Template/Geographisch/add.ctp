<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Geographisch'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="geographisch form large-9 medium-8 columns content">
    <?= $this->Form->create($geographisch) ?>
    <fieldset>
        <legend><?= __('Add Geographisch') ?></legend>
        <?php
            echo $this->Form->control('Beschreibung');
            echo $this->Form->control('Ort');
            echo $this->Form->control('Land');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
