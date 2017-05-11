<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="container">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <h2 class="form-signin-heading"><?= __('Bitte Email Adresse eingeben') ?></h2>
        <?= $this->Form->control('email',['class' => 'form-control'], ['placeholder' => 'Email']) ?>
    </fieldset>
<?= $this->Form->button(__('Senden'),['class' => 'btn btn-lg btn-primary btn-block']); ?>
<?= $this->Form->end() ?>
</div>
