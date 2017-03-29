<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $kategorien->Kat_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $kategorien->Kat_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Kategorien'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="kategorien form large-9 medium-8 columns content">
    <?= $this->Form->create($kategorien) ?>
    <fieldset>
        <legend><?= __('Edit Kategorien') ?></legend>
        <?php
            echo $this->Form->control('Name');
            echo $this->Form->control('Unterkategorie');
            echo $this->Form->control('Beschreibung');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
