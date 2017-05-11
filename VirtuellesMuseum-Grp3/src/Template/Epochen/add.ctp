<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Epochen'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="epochen form large-9 medium-8 columns content">
    <?= $this->Form->create($epochen, ['class' => 'form-signin']) ?>
    <fieldset>
		<h2 class="form-signin-heading"><?= __('Epoche hinzufügen') ?></h2>
        <?php
            echo $this->Form->control('name',  array('label' => false, 'class' => 'form-control', "placeholder" => __('Name')));
            echo $this->Form->control('Start',  array('label' => false, 'class' => 'form-control', "placeholder" => __('Start Datum')));
            echo $this->Form->control('Ende', array('label' => false, 'class' => 'form-control', "placeholder" => __('End Datum')));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Hinzufügen'),  ['class' => 'btn btn-lg btn-primary btn-block']) ?>
    <?= $this->Form->end() ?>
</div>
