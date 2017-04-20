<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="kategorien index large-9 medium-8 columns content">
	<div class="row team">
		<?php foreach ($werke as $werke): ?>
		<div class="col-md-4 b1">
				<h4><a><?= h($werke->Titel) ?></a></h4>
				<h5><?= h($werke->Urheber) ?></h5>
				<p><?= h($werke->Erscheinungsdatum) ?></p>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $werke->Werk_ID]) ?>
						<?php if ($login == true): ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $werke->Werk_ID]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $werke->Werk_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $werke->Werk_ID)]) ?>
				        <?php endif; ?>
                	</td>
		</div>
		
		<?php
		$i++;
		if(($i % 3) == 0) : ?>
	</div>
	<div class="row team">
		<?php  endif; endforeach; ?>
	</div>
</div>
