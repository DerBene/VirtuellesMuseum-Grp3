<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="persoenlichkeitenHasKategorien form large-9 medium-8 columns content">
    <?= $this->Form->create($persoenlichkeitenHasKategorien) ?>
    <fieldset>
        <legend><?= __('ersoenlichkeiten Zugehörigkeit zu Kategorien hinzufügen') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Fertig')) ?>
    <?= $this->Form->end() ?>
</div>
