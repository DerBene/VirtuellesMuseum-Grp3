<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="container">
	<div class="row">
		<?php foreach ($geographisch as $geographisch): ?>
		<div class="col-md-4 b1">
				<h4><?= h($geographisch->Ort) ?>, <?= h($geographisch->Land) ?></h4>
				<h5><?= h($geographisch->Beschreibung) ?></h5>
					<td class="actions">
						<?= $this->Html->link(__('Anzeigen'), ['action' => 'view', $geographisch->Graph_ID], ['class' => 'btn btn-secondary']) ?>
						<?php if ($login == true): ?>
						<?= $this->Html->link(__('Bearbeiten'), ['action' => 'edit', $geographisch->Graph_ID], ['class' => 'btn btn-secondary']) ?>
						<?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $geographisch->Graph_ID], ['class' => 'btn btn-secondary'], ['confirm' => __('Are you sure you want to delete # {0}?', $geographisch->Graph_ID)]) ?>
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