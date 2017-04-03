<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="epochen index large-9 medium-8 columns content">
    <h3><?= __('Suchergebnisse') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- je nach suchergebnissen andere Tabelle darstellen -->
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ende') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <!-- foreach schleife -->
        </tbody>
    </table>
</div>