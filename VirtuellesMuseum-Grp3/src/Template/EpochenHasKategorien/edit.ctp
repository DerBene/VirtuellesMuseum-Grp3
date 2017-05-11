<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Aktionen') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $epochenHasKategorien->Epochen_E_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $epochenHasKategorien->Epochen_E_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Liste Epochen Zugehörigkeit zu Kategorien auf'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="epochenHasKategorien form large-9 medium-8 columns content">
    <?= $this->Form->create($epochenHasKategorien) ?>
    <fieldset>
        <legend><?= __('Epochen Zugehörigkeit zu Kategorien bearbeiten') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Fertig')) ?>
    <?= $this->Form->end() ?>
</div>
