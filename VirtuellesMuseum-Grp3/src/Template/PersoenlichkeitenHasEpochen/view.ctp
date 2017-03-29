<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Persoenlichkeiten Has Epochen'), ['action' => 'edit', $persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Persoenlichkeiten Has Epochen'), ['action' => 'delete', $persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Persoenlichkeiten Has Epochen'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persoenlichkeiten Has Epochen'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="persoenlichkeitenHasEpochen view large-9 medium-8 columns content">
    <h3><?= h($persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Persoenlichkeiten Pers ID') ?></th>
            <td><?= $this->Number->format($persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Epochen E ID') ?></th>
            <td><?= $this->Number->format($persoenlichkeitenHasEpochen->Epochen_E_ID) ?></td>
        </tr>
    </table>
</div>
