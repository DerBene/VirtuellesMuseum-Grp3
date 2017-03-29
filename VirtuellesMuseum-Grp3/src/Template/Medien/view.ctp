<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Medien'), ['action' => 'edit', $medien->Med_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medien'), ['action' => 'delete', $medien->Med_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $medien->Med_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Medien'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medien'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medien view large-9 medium-8 columns content">
    <h3><?= h($medien->Med_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Typ') ?></th>
            <td><?= h($medien->Typ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dateipfad') ?></th>
            <td><?= h($medien->Dateipfad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Urheber') ?></th>
            <td><?= h($medien->Urheber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Erscheinungsdatum') ?></th>
            <td><?= h($medien->Erscheinungsdatum) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Med ID') ?></th>
            <td><?= $this->Number->format($medien->Med_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Persönlichkeiten Pers ID') ?></th>
            <td><?= $this->Number->format($medien->Persönlichkeiten_Pers_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Freischaltung') ?></th>
            <td><?= $medien->Freischaltung ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
