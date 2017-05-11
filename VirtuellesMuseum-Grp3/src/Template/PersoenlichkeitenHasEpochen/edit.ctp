<?php
/**
  * @var \App\View\AppView $this
  */
?>

<div class="persoenlichkeitenHasEpochen form large-9 medium-8 columns content">
    <?= $this->Form->create($persoenlichkeitenHasEpochen) ?>
    <fieldset>
        <legend><?= __('Persoenlichkeiten Zugehörigkeit zu Epochen bearbeiten') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Fertig')) ?>
    <?= $this->Form->end() ?>
</div>
