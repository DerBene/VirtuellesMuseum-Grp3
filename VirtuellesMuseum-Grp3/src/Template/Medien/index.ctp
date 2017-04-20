<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="kategorien index large-9 medium-8 columns content">
	<div class="row team">
		<?php foreach ($medien as $medien): ?>
		<div class="col-md-4 b1">
				<img class="img-responsive" src="<?= h($medien->Dateipfad) ?>">
				<h5><?= h($medien->Urheber) ?></h5>
				<p><?= h($medien->Erscheinungsdatum) ?></p>
				<?php if ($login == true): ?>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $medien->Med_ID]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $medien->Med_ID]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medien->Med_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $medien->Med_ID)]) ?>
					</td>
				<?php else: ?>
				
				<?php endif; ?>
		</div>
		
		<?php
		$i++;
		if(($i % 3) == 0) : ?>
	</div>
	<div class="row team">
		<?php  endif; endforeach; ?>
	</div>
</div>
