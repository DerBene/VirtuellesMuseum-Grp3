<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Bitte das neue Passwort eingeben') ?></legend>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->control('passwordCheck', array('type' => 'password')) ?>
    </fieldset>
<?= $this->Form->button(__('Passwort ändern')); ?>
<?= $this->Form->end() ?>
</div>
