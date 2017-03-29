<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Persoenlichkeiten Has Kategorien'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="persoenlichkeitenHasKategorien form large-9 medium-8 columns content">
    <?= $this->Form->create($persoenlichkeitenHasKategorien) ?>
    <fieldset>
        <legend><?= __('Add Persoenlichkeiten Has Kategorien') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
