<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Persoenlichkeiten'), ['action' => 'index']) ?> </li>
        <li><a href="PersoenlichkeitenHasEpochen">Abh&auml;ngigkeiten zu Epochen anzeigen</a></li>
        <li><a href="PersoenlichkeitenHasKategorien">Abh&auml;ngigkeiten zu Kategorien anzeigen</a></li>
    </ul>
</nav>
<div class="persoenlichkeiten view large-9 medium-8 columns content">
    <h3><?= h($persoenlichkeiten->Pers_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($persoenlichkeiten->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kurzbeschreibung') ?></th>
            <td><?= h($persoenlichkeiten->Kurzbeschreibung) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zitat') ?></th>
            <td><?= h($persoenlichkeiten->Zitat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LangerText') ?></th>
            <td><?= h($persoenlichkeiten->LangerText) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BiografischeDaten') ?></th>
            <td><?= h($persoenlichkeiten->BiografischeDaten) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pers ID') ?></th>
            <td><?= $this->Number->format($persoenlichkeiten->Pers_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Freischaltung') ?></th>
            <td><?= $persoenlichkeiten->Freischaltung ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
