<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Neuer Nutzer'), ['action' => 'add']) ?></li>
        <li><a href="/VirtuellesMuseum-Grp3/Kategorien/add">Kategorien hinzufügen</a></li>
        <li><a href="/VirtuellesMuseum-Grp3/Epochen/add">Epochen hinzufügen</a></li>
        <li><a href="/VirtuellesMuseum-Grp3/Geographisch/add">Geographische Daten hinzufügen</a></li>
        <li><a href="/VirtuellesMuseum-Grp3/Persoenlichkeiten/add">Pers&ouml;nlichkeiten hinzufügen</a></li>
        <li><a href="/VirtuellesMuseum-Grp3/Medien/add">Medien hinzufügen</a></li>
        <li><a href="/VirtuellesMuseum-Grp3/Werke/add">Werke hinzufügen</a></li>
        <li><a href="/VirtuellesMuseum-Grp3/Users/logout">Abmelden</a></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Benutzer') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emailverificated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->role) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td><?= $this->FormatBoolean->yesNo($user->emailverificated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Anzeigen'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Bearbeiten'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
