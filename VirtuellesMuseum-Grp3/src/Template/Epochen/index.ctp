<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="kategorien index large-9 medium-8 columns content">
	<div class="row team">
		<?php foreach ($epochen as $epochen): ?>
		<div class="col-md-4 b1">
				<h4><?= h($epochen->name) ?></h4>
				<h5><?= h($epochen->Start) ?> - <?= h($epochen->Ende) ?></h5>
				<?php if ($login == true): ?>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $epochen->E_ID]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $epochen->E_ID]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $epochen->E_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $epochen->E_ID)]) ?>
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
