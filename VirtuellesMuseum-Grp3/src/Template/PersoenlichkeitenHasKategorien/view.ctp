<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Persoenlichkeiten Has Kategorien'), ['action' => 'edit', $persoenlichkeitenHasKategorien->Persoenlichkeiten_Pers_ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Persoenlichkeiten Has Kategorien'), ['action' => 'delete', $persoenlichkeitenHasKategorien->Persoenlichkeiten_Pers_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $persoenlichkeitenHasKategorien->Persoenlichkeiten_Pers_ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Persoenlichkeiten Has Kategorien'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persoenlichkeiten Has Kategorien'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="persoenlichkeitenHasKategorien view large-9 medium-8 columns content">
    <h3><?= h($persoenlichkeitenHasKategorien->Persoenlichkeiten_Pers_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Persoenlichkeiten Pers ID') ?></th>
            <td><?= $this->Number->format($persoenlichkeitenHasKategorien->Persoenlichkeiten_Pers_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kategorien Kat ID') ?></th>
            <td><?= $this->Number->format($persoenlichkeitenHasKategorien->Kategorien_Kat_ID) ?></td>
        </tr>
    </table>
</div>
