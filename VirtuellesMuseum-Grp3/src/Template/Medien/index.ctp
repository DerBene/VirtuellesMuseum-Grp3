<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="container">
	<div class="row">
		<?php foreach ($medien as $medien): ?>
		<div class="col-md-4 b1">
				<img  class="squared" alt="Photo" src="<?= h($medien->Dateipfad)?>" width="340" height="270">
				<h2><?= h($medien->Urheber) ?></h2>
				<p><?= h($medien->Erscheinungsdatum) ?></p>
					<td class="actions">
						<?= $this->Html->link(__('View Details'), ['action' => 'view', $medien->Med_ID], ['class' => 'btn btn-secondary']) ?>
						<?php if ($login == true): ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $medien->Med_ID], ['class' => 'btn btn-secondary']) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medien->Med_ID],['class' => 'btn btn-secondary'], ['confirm' => __('Are you sure you want to delete # {0}?', $medien->Med_ID)]) ?>
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
