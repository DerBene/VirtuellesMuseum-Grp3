<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><a href="search">Durchsuchen</a></li>
    </ul>
</nav>
<div class="epochen index large-9 medium-8 columns content">
    <h3><?= __('Epochen') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('E_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ende') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($epochen as $epochen): ?>
            <tr>
                <td><?= $this->Number->format($epochen->E_ID) ?></td>
                <td><?= h($epochen->Start) ?></td>
                <td><?= h($epochen->Ende) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $epochen->E_ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $epochen->E_ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $epochen->E_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $epochen->E_ID)]) ?>
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