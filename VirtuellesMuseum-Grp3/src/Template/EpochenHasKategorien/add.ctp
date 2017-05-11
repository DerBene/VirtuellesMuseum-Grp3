<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="epochenHasKategorien form large-9 medium-8 columns content">
    <?= $this->Form->create($epochenHasKategorien) ?>
    <fieldset>
        <legend><?= __('Epochen Zugehörigkeit zu Kategorien hinzufügen') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Fertig')) ?>
    <?= $this->Form->end() ?>
</div>
