<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Liste Epochen auf'), ['action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="epochen view large-9 medium-8 columns content">
    <h3><?= h($epochen->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($epochen->Start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ende') ?></th>
            <td><?= h($epochen->Ende) ?></td>
        </tr>
    </table>
</div>
