<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Aktionen') ?></li>
		<?php if ($login == true): ?>
        <li><?= $this->Html->link(__('Neue Abhängigkeit erstellen'), ['action' => 'add']) ?></li>
		<?php endif; ?>
    </ul>
</nav>
<div class="werkeHasPersoenlichkeiten index large-9 medium-8 columns content">
    <h3><?= __('Werke Zugehörigkeit zu Persoenlichkeiten') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Werke_Werk_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Persoenlichkeiten_Pers_ID') ?></th>
				<?php if ($login == true): ?>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
				<?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($werkeHasPersoenlichkeiten as $werkeHasPersoenlichkeiten): ?>
            <tr>
                <td><?= $this->Number->format($werkeHasPersoenlichkeiten->Werke_Werk_ID) ?></td>
                <td><?= $this->Number->format($werkeHasPersoenlichkeiten->Persoenlichkeiten_Pers_ID) ?></td>
				<?php if ($login == true): ?>
                <td class="actions">
                    <?= $this->Html->link(__('Anzeigen'), ['action' => 'view', $werkeHasPersoenlichkeiten->Werke_Werk_ID]) ?>
                    <?= $this->Html->link(__('Bearbeiten'), ['action' => 'edit', $werkeHasPersoenlichkeiten->Werke_Werk_ID]) ?>
                    <?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $werkeHasPersoenlichkeiten->Werke_Werk_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $werkeHasPersoenlichkeiten->Werke_Werk_ID)]) ?>
                </td>
				<?php endif; ?>
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
