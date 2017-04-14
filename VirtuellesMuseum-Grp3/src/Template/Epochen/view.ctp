<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Epochen'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="epochen view large-9 medium-8 columns content">
    <h3><?= h($epochen->E_ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($epochen->Start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ende') ?></th>
            <td><?= h($epochen->Ende) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('E ID') ?></th>
            <td><?= $this->Number->format($epochen->E_ID) ?></td>
        </tr>
    </table>
</div>
