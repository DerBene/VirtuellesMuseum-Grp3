<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Werke Has Persoenlichkeiten'), ['action' => 'edit', $werkeHasPersoenlichkeiten->Werke_Werk_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Werke Has Persoenlichkeiten'), ['action' => 'delete', $werkeHasPersoenlichkeiten->Werke_Werk_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $werkeHasPersoenlichkeiten->Werke_Werk_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Werke Has Persoenlichkeiten'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Werke Has Persoenlichkeiten'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="werkeHasPersoenlichkeiten view large-9 medium-8 columns content">
    <h3><?= h($werkeHasPersoenlichkeiten->Werke_Werk_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Werke Werk ID') ?></th>
            <td><?= $this->Number->format($werkeHasPersoenlichkeiten->Werke_Werk_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Persoenlichkeiten Pers ID') ?></th>
            <td><?= $this->Number->format($werkeHasPersoenlichkeiten->Persoenlichkeiten_Pers_ID) ?></td>
        </tr>
    </table>
</div>
