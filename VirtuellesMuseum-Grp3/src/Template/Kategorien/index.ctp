<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="container">
	<div class="row">
		<?php foreach ($kategorien as $kategorien): ?>
		<div class="col-md-4 b1">
				<h2><?= h($kategorien->Name) ?></h4>
				<h5><?= h($kategorien->Unterkategorie) ?></h5>
				<p><?= h($kategorien->Beschreibung) ?></p>
					<td class="actions">
						<?= $this->Html->link(__('Anzeigen'), ['action' => 'View', $kategorien->Kat_ID], ['class' => 'btn btn-secondary']) ?>
						<?php if ($login == true): ?>
						<?= $this->Html->link(__('Bearbeiten'), ['action' => 'edit', $kategorien->Kat_ID], ['class' => 'btn btn-secondary']) ?>
						<?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $kategorien->Kat_ID],['class' => 'btn btn-secondary'], ['confirm' => __('Are you sure you want to delete # {0}?', $kategorien->Kat_ID)]) ?>
					    <?php endif; ?>
                    </td>
		</div>
		<?php
		$i++;
		if(($i % 3) == 0) : ?>
	</div>
	<div class="row" style="padding-top: 4rem">
		<?php  endif; endforeach; ?>
	</div>
</div>
       
