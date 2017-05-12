<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="persoenlichkeitenHasKategorien index large-9 medium-8 columns content">
    <h3><?= __('Persoenlichkeiten Zugehörigkeit zu Kategorien') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Persoenlichkeiten') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Kategorien') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persoenlichkeitenHasKategorien as $persoenlichkeitenHasKategorien): ?>
            <tr>
                <?php foreach ($persoenlichkeiten as $p):
                if($p->Pers_ID == $this->Number->format($persoenlichkeitenHasKategorien->Persoenlichkeiten_Pers_ID)): ?>
                <td><?= h($p->Name) ?></td>
                <?php endif; endforeach; ?>
                <?php foreach ($kategorien as $k):
                if($k->Kat_ID == $this->Number->format($persoenlichkeitenHasKategorien->Kategorien_Kat_ID)): ?>
                <td><?= h($k->Name) ?></td>
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