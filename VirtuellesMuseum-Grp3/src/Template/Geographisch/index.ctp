<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="kategorien index large-9 medium-8 columns content">
	<div class="row team">
		<?php foreach ($geographisch as $geographisch): ?>
		<div class="col-md-4 b1">
				<h4><?= h($geographisch->Ort) ?>, <?= h($geographisch->Land) ?></h4>
				<h5><?= h($geographisch->Beschreibung) ?></h5>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $geographisch->Graph_ID]) ?>
						<?php if ($login == true): ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $geographisch->Graph_ID]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $geographisch->Graph_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $geographisch->Graph_ID)]) ?>
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