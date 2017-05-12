<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Liste Medien auf'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="medien view large-9 medium-8 columns content">
    <h3><?= h($medien->Med_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Typ') ?></th>
            <td><?= h($medien->Typ) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Urheber') ?></th>
            <td><?= h($medien->Urheber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Erscheinungsdatum') ?></th>
            <td><?= h($medien->Erscheinungsdatum) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Freischaltung') ?></th>
            <td><?= $medien->Freischaltung ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>