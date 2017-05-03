<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="users form">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Bitte Email Adresse eingeben') ?></legend>
        <?= $this->Form->control('email') ?>
    </fieldset>
<?= $this->Form->button(__('Senden')); ?>
<?= $this->Form->end() ?>
</div>
