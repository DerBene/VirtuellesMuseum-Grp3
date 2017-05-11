<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="werkeHasPersoenlichkeiten form large-9 medium-8 columns content">
    <?= $this->Form->create($werkeHasPersoenlichkeiten) ?>
    <fieldset>
        <legend><?= __('Werke Zugehörigkeit zu Persoenlichkeiten hinzufügen') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Fertig')) ?>
    <?= $this->Form->end() ?>
</div>
