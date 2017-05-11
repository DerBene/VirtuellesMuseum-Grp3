<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="werke form large-9 medium-8 columns content">
    <?= $this->Form->create($werke) ?>
    <fieldset>
        <legend><?= __('Werke bearbeiten') ?></legend>
        <?php
            echo $this->Form->control('Titel');
            echo $this->Form->control('Typ');
            echo $this->Form->control('Dateipfad');
            echo $this->Form->control('Urheber');
            echo $this->Form->control('Erscheinungsdatum');
            echo $this->Form->control('Freischaltung');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Fertig')) ?>
    <?= $this->Form->end() ?>
</div>
