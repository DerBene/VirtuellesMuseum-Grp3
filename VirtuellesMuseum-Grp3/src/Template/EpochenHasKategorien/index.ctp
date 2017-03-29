<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Epochen Has Kategorien'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="epochenHasKategorien index large-9 medium-8 columns content">
    <h3><?= __('Epochen Has Kategorien') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Epochen_E_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Kategorien_Kat_ID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($epochenHasKategorien as $epochenHasKategorien): ?>
            <tr>
                <td><?= $this->Number->format($epochenHasKategorien->Epochen_E_ID) ?></td>
                <td><?= $this->Number->format($epochenHasKategorien->Kategorien_Kat_ID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $epochenHasKategorien->Epochen_E_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $epochenHasKategorien->Epochen_E_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $epochenHasKategorien->Epochen_E_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $epochenHasKategorien->Epochen_E_ID)]) ?>
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
