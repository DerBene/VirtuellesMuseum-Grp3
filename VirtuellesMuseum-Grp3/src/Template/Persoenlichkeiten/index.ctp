<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Persoenlichkeiten'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="persoenlichkeiten index large-9 medium-8 columns content">
    <h3><?= __('Persoenlichkeiten') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Pers_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Kurzbeschreibung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Zitat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LangerText') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BiografischeDaten') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Freischaltung') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persoenlichkeiten as $persoenlichkeiten): ?>
            <tr>
                <td><?= $this->Number->format($persoenlichkeiten->Pers_ID) ?></td>
                <td><?= h($persoenlichkeiten->Name) ?></td>
                <td><?= h($persoenlichkeiten->Kurzbeschreibung) ?></td>
                <td><?= h($persoenlichkeiten->Zitat) ?></td>
                <td><?= h($persoenlichkeiten->LangerText) ?></td>
                <td><?= h($persoenlichkeiten->BiografischeDaten) ?></td>
                <td><?= h($persoenlichkeiten->Freischaltung) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $persoenlichkeiten->Pers_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $persoenlichkeiten->Pers_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $persoenlichkeiten->Pers_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $persoenlichkeiten->Pers_ID)]) ?>
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
