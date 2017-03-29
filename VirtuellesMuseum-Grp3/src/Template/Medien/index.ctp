<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Medien'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medien index large-9 medium-8 columns content">
    <h3><?= __('Medien') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Med_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Typ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dateipfad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Urheber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Erscheinungsdatum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Freischaltung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Persönlichkeiten_Pers_ID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medien as $medien): ?>
            <tr>
                <td><?= $this->Number->format($medien->Med_ID) ?></td>
                <td><?= h($medien->Typ) ?></td>
                <td><?= h($medien->Dateipfad) ?></td>
                <td><?= h($medien->Urheber) ?></td>
                <td><?= h($medien->Erscheinungsdatum) ?></td>
                <td><?= h($medien->Freischaltung) ?></td>
                <td><?= $this->Number->format($medien->Persönlichkeiten_Pers_ID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $medien->Med_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medien->Med_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medien->Med_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $medien->Med_ID)]) ?>
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
