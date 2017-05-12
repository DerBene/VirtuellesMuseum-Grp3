<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="werkeHasPersoenlichkeiten index large-9 medium-8 columns content">
    <h3><?= __('Werke Zugehörigkeit zu Persoenlichkeiten') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Werke') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Persoenlichkeiten') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($werkeHasPersoenlichkeiten as $werkeHasPersoenlichkeiten): ?>
            <tr>
                <?php foreach ($werke as $w):
                if($w->Werk_ID == $this->Number->format($werkeHasPersoenlichkeiten->Werke_Werk_ID)): ?>
                <td><?= h($w->Titel) ?></td>
                <?php endif; endforeach; ?>
                <?php foreach ($persoenlichkeiten as $p):
                if($p->Pers_ID == $this->Number->format($werkeHasPersoenlichkeiten->Persoenlichkeiten_Pers_ID)): ?>
                <td><?= h($p->Name) ?></td>
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