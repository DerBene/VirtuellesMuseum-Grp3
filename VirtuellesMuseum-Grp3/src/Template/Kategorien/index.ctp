<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="kategorien index large-9 medium-8 columns content">
	<div class="row team">
		<?php foreach ($kategorien as $kategorien): ?>
		<div class="col-md-4 b1">
				<h4><?= h($kategorien->Name) ?></h4>
				<h5><?= h($kategorien->Unterkategorie) ?></h5>
				<p><?= h($kategorien->Beschreibung) ?></p>
				<?php if ($login == true): ?>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $kategorien->Kat_ID]) ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $kategorien->Kat_ID]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $kategorien->Kat_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $kategorien->Kat_ID)]) ?>
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
       
