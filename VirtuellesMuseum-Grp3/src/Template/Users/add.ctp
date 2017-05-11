<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Alle Benutzer anzeigen'), ['action' => 'index']) ?></li>
    </ul>
</nav>
    <?= $this->Form->create($user) ?>
	<div class="container">
        <h3><?= __('Benutzer Daten eingeben') ?></h3>
		<div class="form-group row">
        <?php    echo $this->Form->control('username', array('templates' => ['inputContainer' => '<div class="col-xs-9">{{content}}</div>']
		,'label' => false,'class' => 'form-control', "placeholder" => __('Benutzername')));?>
		</div>
		<div class="form-group row">
        <?php    echo $this->Form->control('password', array('label' => false,'class' => 'form-control', "placeholder" => __('Passwort')));?>
		</div>
        <div class="form-group row">
		<?php	echo $this->Form->control('email', array('label' => false,'class' => 'form-control', "placeholder" => __('Email')));?>
        </div>
		<div class="form-group row">    
		<?php	echo $this->Form->control('role', array('label' => false,'class' => 'form-control', "placeholder" => __('Rolle'),
            'options' => ['admin' => 'Admin', 'author' => 'Author']));?>
        </div>
    <?= $this->Form->button(__('Benutzer hinzufügen'), ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
	</div>
