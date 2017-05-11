<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
		<?php if ($login == true): ?>
        <li><?= $this->Html->link(__('Neue Abhängigkeit erstellen'), ['action' => 'add']) ?></li>
		<?php endif; ?>
    </ul>
</nav>
<div class="persoenlichkeitenHasKategorien index large-9 medium-8 columns content">
    <h3><?= __('Persoenlichkeiten Zugehörigkeit zu Kategorien') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Persoenlichkeiten_Pers_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Kategorien_Kat_ID') ?></th>
				<?php if ($login == true): ?>
                <th scope="col" class="actions"><?= __('Aktionen') ?></th>
				<?php endif; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persoenlichkeitenHasKategorien as $persoenlichkeitenHasKategorien): ?>
            <tr>
                <td><?= $this->Number->format($persoenlichkeitenHasKategorien->Persoenlichkeiten_Pers_ID) ?></td>
                <td><?= $this->Number->format($persoenlichkeitenHasKategorien->Kategorien_Kat_ID) ?></td>
				<?php if ($login == true): ?>
                <td class="actions">
                    <?= $this->Html->link(__('Anzeigen'), ['action' => 'view', $persoenlichkeitenHasKategorien->Persoenlichkeiten_Pers_ID]) ?>
                    <?= $this->Html->link(__('Bearbeiten'), ['action' => 'edit', $persoenlichkeitenHasKategorien->Persoenlichkeiten_Pers_ID]) ?>
                    <?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $persoenlichkeitenHasKategorien->Persoenlichkeiten_Pers_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $persoenlichkeitenHasKategorien->Persoenlichkeiten_Pers_ID)]) ?>
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
