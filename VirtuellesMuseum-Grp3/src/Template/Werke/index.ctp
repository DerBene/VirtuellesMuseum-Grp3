<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Werke'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="werke index large-9 medium-8 columns content">
    <h3><?= __('Werke') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Werk_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Typ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dateipfad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Urheber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Erscheinungsdatum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Freischaltung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Geographisch_Graph_ID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($werke as $werke): ?>
            <tr>
                <td><?= $this->Number->format($werke->Werk_ID) ?></td>
                <td><?= h($werke->Typ) ?></td>
                <td><?= h($werke->Dateipfad) ?></td>
                <td><?= h($werke->Urheber) ?></td>
                <td><?= h($werke->Erscheinungsdatum) ?></td>
                <td><?= h($werke->Freischaltung) ?></td>
                <td><?= $this->Number->format($werke->Geographisch_Graph_ID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $werke->Werk_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $werke->Werk_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $werke->Werk_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $werke->Werk_ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
