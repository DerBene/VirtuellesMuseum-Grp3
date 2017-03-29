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
                ['action' => 'delete', $werkeHasPersoenlichkeiten->Werke_Werk_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $werkeHasPersoenlichkeiten->Werke_Werk_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Werke Has Persoenlichkeiten'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="werkeHasPersoenlichkeiten form large-9 medium-8 columns content">
    <?= $this->Form->create($werkeHasPersoenlichkeiten) ?>
    <fieldset>
        <legend><?= __('Edit Werke Has Persoenlichkeiten') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
