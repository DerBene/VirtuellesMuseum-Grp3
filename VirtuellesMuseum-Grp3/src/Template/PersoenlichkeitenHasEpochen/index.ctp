<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
		<?php if ($login == true): ?>
        <li><?= $this->Html->link(__('Neue Abhängigkeit erstellen'), ['action' => 'add']) ?></li>
		<?php endif; ?>
    </ul>
</nav>
<div class="persoenlichkeitenHasEpochen index large-9 medium-8 columns content">
    <h3><?= __('Persoenlichkeiten Zugehörigkeit zu Epochen') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Persoenlichkeiten_Pers_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Epochen_E_ID') ?></th>
				<?php if ($login == true): ?>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
				<?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persoenlichkeitenHasEpochen as $persoenlichkeitenHasEpochen): ?>
            <tr>
                <td><?= $this->Number->format($persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID) ?></td>
                <td><?= $this->Number->format($persoenlichkeitenHasEpochen->Epochen_E_ID) ?></td>
				<?php if ($login == true): ?>
                <td class="actions">
                    <?= $this->Html->link(__('Bearbeiten'), ['action' => 'edit', $persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID]) ?>
                    <?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID)]) ?>
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