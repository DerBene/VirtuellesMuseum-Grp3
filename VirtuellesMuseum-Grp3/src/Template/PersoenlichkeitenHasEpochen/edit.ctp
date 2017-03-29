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
                ['action' => 'delete', $persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Persoenlichkeiten Has Epochen'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="persoenlichkeitenHasEpochen form large-9 medium-8 columns content">
    <?= $this->Form->create($persoenlichkeitenHasEpochen) ?>
    <fieldset>
        <legend><?= __('Edit Persoenlichkeiten Has Epochen') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
