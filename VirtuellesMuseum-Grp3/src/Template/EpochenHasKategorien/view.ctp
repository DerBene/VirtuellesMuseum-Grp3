<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Epochen Has Kategorien'), ['action' => 'edit', $epochenHasKategorien->Epochen_E_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Epochen Has Kategorien'), ['action' => 'delete', $epochenHasKategorien->Epochen_E_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $epochenHasKategorien->Epochen_E_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Epochen Has Kategorien'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Epochen Has Kategorien'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="epochenHasKategorien view large-9 medium-8 columns content">
    <h3><?= h($epochenHasKategorien->Epochen_E_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Epochen E ID') ?></th>
            <td><?= $this->Number->format($epochenHasKategorien->Epochen_E_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kategorien Kat ID') ?></th>
            <td><?= $this->Number->format($epochenHasKategorien->Kategorien_Kat_ID) ?></td>
        </tr>
    </table>
</div>
