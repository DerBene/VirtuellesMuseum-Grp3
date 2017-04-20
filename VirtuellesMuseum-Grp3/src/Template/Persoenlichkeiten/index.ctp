<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="kategorien index large-9 medium-8 columns content">
	<div class="row team">
		<?php foreach ($persoenlichkeiten as $persoenlichkeiten): ?>
		<div class="col-md-4 b1">
				<img class="img-responsive" src="<?=h($medien->first()->dateipfad)?>">
				<h4><?= h($persoenlichkeiten->Name) ?></h4>
				<h5><?= h($persoenlichkeiten->Zitat) ?></h5>
				<p><?= h($persoenlichkeiten->Kurzbeschreibung) ?></p>
				<?php if ($login == true): ?>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $persoenlichkeiten->Pers_ID]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $persoenlichkeiten->Pers_ID]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $persoenlichkeiten->Pers_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $persoenlichkeiten->Pers_ID)]) ?>
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
       