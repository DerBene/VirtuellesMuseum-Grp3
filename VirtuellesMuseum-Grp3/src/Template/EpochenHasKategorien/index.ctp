<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="epochenHasKategorien index large-9 medium-8 columns content">
    <h3><?= __('Epochen Zugehörigkeit zu Kategorien') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Epochen_E_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Kategorien_Kat_ID') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($epochenHasKategorien as $epochenHasKategorien): ?>
            <tr>
                <td><?= $this->Number->format($epochenHasKategorien->Epochen_E_ID) ?></td>
                <td><?= $this->Number->format($epochenHasKategorien->Kategorien_Kat_ID) ?></td>
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