<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="container">
	<div class="row">
		<?php foreach ($werke as $werke): ?>
		<div class="col-md-4 b1">
				<h2><a><?= h($werke->Titel) ?></a></h2>
				<h5><?= h($werke->Urheber) ?></h5>
				<p><?= h($werke->Erscheinungsdatum) ?></p>
					<td class="actions">
						<?= $this->Html->link(__('Anzeigen'), ['action' => 'view', $werke->Werk_ID], ['class' => 'btn btn-secondary']) ?>
						<?php if ($login == true): ?>
						<?= $this->Html->link(__('Bearbeiten'), ['action' => 'edit', $werke->Werk_ID], ['class' => 'btn btn-secondary']) ?>
						<?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $werke->Werk_ID], ['class' => 'btn btn-secondary'], ['confirm' => __('Are you sure you want to delete # {0}?', $werke->Werk_ID), ['class' => 'btn btn-secondary']]) ?>
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
