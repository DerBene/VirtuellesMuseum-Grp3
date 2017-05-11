<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="persoenlichkeitenHasEpochen view large-9 medium-8 columns content">
    <h3><?= h($persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Persoenlichkeiten Pers ID') ?></th>
            <td><?= $this->Number->format($persoenlichkeitenHasEpochen->Persoenlichkeiten_Pers_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Epochen E ID') ?></th>
            <td><?= $this->Number->format($persoenlichkeitenHasEpochen->Epochen_E_ID) ?></td>
        </tr>
    </table>
</div>
