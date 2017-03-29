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
                ['action' => 'delete', $epochen->E_ID],
                ['confirm' => __('Are you sure you want to delete # {0}?', $epochen->E_ID)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Epochen'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="epochen form large-9 medium-8 columns content">
    <?= $this->Form->create($epochen) ?>
    <fieldset>
        <legend><?= __('Edit Epochen') ?></legend>
        <?php
            echo $this->Form->control('Start');
            echo $this->Form->control('Ende');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
