<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Kategorien'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="kategorien index large-9 medium-8 columns content">
    <h3><?= __('Kategorien') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Kat_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Unterkategorie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Beschreibung') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kategorien as $kategorien): ?>
            <tr>
                <td><?= $this->Number->format($kategorien->Kat_ID) ?></td>
                <td><?= h($kategorien->Name) ?></td>
                <td><?= h($kategorien->Unterkategorie) ?></td>
                <td><?= h($kategorien->Beschreibung) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $kategorien->Kat_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $kategorien->Kat_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kategorien->Kat_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $kategorien->Kat_ID)]) ?>
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
