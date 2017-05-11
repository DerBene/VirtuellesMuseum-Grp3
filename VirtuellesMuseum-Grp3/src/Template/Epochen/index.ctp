<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="container">
	<div class="row">
		<?php foreach ($epochen as $epochen): ?>
		<div class="col-md-4 b1">
				<h2><?= h($epochen->name) ?></h4>
				<h5><?= h($epochen->Start) ?> - <?= h($epochen->Ende) ?></h5>
				
					<td class="actions">
						<?= $this->Html->link(__('Anzeigen'), ['action' => 'view', $epochen->E_ID], ['class' => 'btn btn-secondary']) ?>
						<?php if ($login == true): ?>
						<?= $this->Html->link(__('Bearbeiten'), ['action' => 'edit', $epochen->E_ID], ['class' => 'btn btn-secondary']) ?>
						<?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $epochen->E_ID], ['class' => 'btn btn-secondary'],  ['confirm' => __('Are you sure you want to delete # {0}?', $epochen->E_ID)]) ?>
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
