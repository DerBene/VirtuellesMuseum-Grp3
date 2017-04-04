<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Werke'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="werke form large-9 medium-8 columns content">
    <?= $this->Form->create($werke) ?>
    <fieldset>
        <legend><?= __('Add Werke') ?></legend>
        <?php
            echo $this->Form->control('Titel');
            echo $this->Form->control('Typ');
            echo $this->Form->control('Dateipfad');
            echo $this->Form->control('Urheber');
            echo $this->Form->control('Erscheinungsdatum');
            echo $this->Form->control('Freischaltung');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
