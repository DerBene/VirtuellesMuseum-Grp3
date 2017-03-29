<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Kategorien'), ['action' => 'edit', $kategorien->Kat_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kategorien'), ['action' => 'delete', $kategorien->Kat_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $kategorien->Kat_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Kategorien'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kategorien'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kategorien view large-9 medium-8 columns content">
    <h3><?= h($kategorien->Kat_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($kategorien->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unterkategorie') ?></th>
            <td><?= h($kategorien->Unterkategorie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beschreibung') ?></th>
            <td><?= h($kategorien->Beschreibung) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kat ID') ?></th>
            <td><?= $this->Number->format($kategorien->Kat_ID) ?></td>
        </tr>
    </table>
</div>
