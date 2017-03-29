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
                ['action' => 'delete', $epochenHasKategorien->Epochen_E_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $epochenHasKategorien->Epochen_E_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Epochen Has Kategorien'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="epochenHasKategorien form large-9 medium-8 columns content">
    <?= $this->Form->create($epochenHasKategorien) ?>
    <fieldset>
        <legend><?= __('Edit Epochen Has Kategorien') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
