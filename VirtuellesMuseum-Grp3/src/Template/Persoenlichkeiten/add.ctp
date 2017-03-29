<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Persoenlichkeiten'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="persoenlichkeiten form large-9 medium-8 columns content">
    <?= $this->Form->create($persoenlichkeiten) ?>
    <fieldset>
        <legend><?= __('Add Persoenlichkeiten') ?></legend>
        <?php
            echo $this->Form->control('Name');
            echo $this->Form->control('Kurzbeschreibung');
            echo $this->Form->control('Zitat');
            echo $this->Form->control('LangerText');
            echo $this->Form->control('BiografischeDaten');
            echo $this->Form->control('Freischaltung');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
