<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="kategorien form large-9 medium-8 columns content">
    <?= $this->Form->create($kategorien) ?>
    <fieldset>
        <legend><?= __('Kategorien bearbeiten') ?></legend>
        <?php
            echo $this->Form->control('Name');
            echo $this->Form->control('Unterkategorie');
            echo $this->Form->control('Beschreibung');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Fertig')) ?>
    <?= $this->Form->end() ?>
</div>
