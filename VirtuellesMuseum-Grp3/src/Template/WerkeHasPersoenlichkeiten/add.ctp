<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Werke Has Persoenlichkeiten'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="werkeHasPersoenlichkeiten form large-9 medium-8 columns content">
    <?= $this->Form->create($werkeHasPersoenlichkeiten) ?>
    <fieldset>
        <legend><?= __('Add Werke Has Persoenlichkeiten') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
