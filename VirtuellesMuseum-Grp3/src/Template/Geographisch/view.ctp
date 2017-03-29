<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Geographisch'), ['action' => 'edit', $geographisch->Graph_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Geographisch'), ['action' => 'delete', $geographisch->Graph_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $geographisch->Graph_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Geographisch'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Geographisch'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="geographisch view large-9 medium-8 columns content">
    <h3><?= h($geographisch->Graph_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Beschreibung') ?></th>
            <td><?= h($geographisch->Beschreibung) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ort') ?></th>
            <td><?= h($geographisch->Ort) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Land') ?></th>
            <td><?= h($geographisch->Land) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Graph ID') ?></th>
            <td><?= $this->Number->format($geographisch->Graph_ID) ?></td>
        </tr>
    </table>
</div>
