<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Geographisch'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="geographisch index large-9 medium-8 columns content">
    <h3><?= __('Geographisch') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Graph_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Beschreibung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ort') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Land') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($geographisch as $geographisch): ?>
            <tr>
                <td><?= $this->Number->format($geographisch->Graph_ID) ?></td>
                <td><?= h($geographisch->Beschreibung) ?></td>
                <td><?= h($geographisch->Ort) ?></td>
                <td><?= h($geographisch->Land) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $geographisch->Graph_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $geographisch->Graph_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $geographisch->Graph_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $geographisch->Graph_ID)]) ?>
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
