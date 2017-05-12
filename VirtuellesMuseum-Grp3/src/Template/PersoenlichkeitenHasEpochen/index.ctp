<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="persoenlichkeitenHasEpochen index large-9 medium-8 columns content">
    <h3><?= __('Persoenlichkeiten Zugehörigkeit zu Epochen') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Persoenlichkeiten') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Epochen') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persoenlichkeitenHasEpochen as $persoenlichkeitenHasEpochen): ?>
            <tr>
                <?php foreach ($persoenlichkeiten as $p):
                if($p->Pers_ID == $this->Number->format($persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID)): ?>
                <td><?= h($p->Name) ?></td>
                <?php endif; endforeach; ?>
                <?php foreach ($epochen as $e):
                if($e->E_ID == $this->Number->format($persoenlichkeitenHasEpochen->Epochen_E_ID)): ?>
                <td><?= h($e->name) ?></td>
                <?php endif; endforeach; ?>
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