<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Liste Geographische Daten auf'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="geographisch view large-9 medium-8 columns content">
    <h3><?= h($geographisch->Ort) ?>, <?= h($geographisch->Land) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Beschreibung') ?></th>
            <td><?= h($geographisch->Beschreibung) ?></td>
        </tr>
    </table>
</div>
