<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Kategorien'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="kategorien view large-9 medium-8 columns content">
    <h3><?= h($kategorien->Name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Unterkategorie') ?></th>
            <td><?= h($kategorien->Unterkategorie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beschreibung') ?></th>
            <td><?= h($kategorien->Beschreibung) ?></td>
        </tr>
    </table>
</div>
