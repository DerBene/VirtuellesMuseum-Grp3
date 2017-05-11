<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="persoenlichkeiten form large-9 medium-8 columns content">
    <?= $this->Form->create($persoenlichkeiten) ?>
    <fieldset>
        <legend><?= __('Persoenlichkeiten hinzufügen') ?></legend>
        <?php
            echo $this->Form->control('Name');
            echo $this->Form->control('Kurzbeschreibung');
            echo $this->Form->control('Zitat');
            echo $this->Form->control('LangerText');
            echo $this->Form->control('BiografischeDaten');
            echo $this->Form->control('Freischaltung');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Fertig')) ?>
    <?= $this->Form->end() ?>
</div>
