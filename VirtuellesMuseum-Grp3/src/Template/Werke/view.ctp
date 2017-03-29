<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Werke'), ['action' => 'edit', $werke->Werk_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Werke'), ['action' => 'delete', $werke->Werk_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $werke->Werk_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Werke'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Werke'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="werke view large-9 medium-8 columns content">
    <h3><?= h($werke->Werk_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Typ') ?></th>
            <td><?= h($werke->Typ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dateipfad') ?></th>
            <td><?= h($werke->Dateipfad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Urheber') ?></th>
            <td><?= h($werke->Urheber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Erscheinungsdatum') ?></th>
            <td><?= h($werke->Erscheinungsdatum) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Werk ID') ?></th>
            <td><?= $this->Number->format($werke->Werk_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Geographisch Graph ID') ?></th>
            <td><?= $this->Number->format($werke->Geographisch_Graph_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Freischaltung') ?></th>
            <td><?= $werke->Freischaltung ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
