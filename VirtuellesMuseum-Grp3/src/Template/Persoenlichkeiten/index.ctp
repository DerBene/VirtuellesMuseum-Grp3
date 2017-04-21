<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="kategorien index large-9 medium-8 columns content">
	<div class="row team">
		<?php foreach ($persoenlichkeiten as $p): ?>
		<div class="col-md-4 b1">
		        <?php foreach($medien as $m): 
                if($m->persoenlichkeiten_pers_id == $p->Pers_ID): ?>
				<img class="img-responsive" src="<?= h($m->dateipfad)?>">
				<h4><?= h($p->Name) ?></h4>
				<h5><?= h($p->Zitat) ?></h5>
				<p><?= h($p->Kurzbeschreibung) ?></p>
					<td class="actions">
						<?= $this->Html->link(__('View'), ['action' => 'view', $p->Pers_ID]) ?>
						<?php if ($login == true): ?>
						<?= $this->Html->link(__('Edit'), ['action' => 'edit', $p->Pers_ID]) ?>
						<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $p->Pers_ID], ['confirm' => __('Are you sure you want to delete # {0}?', $p->Pers_ID)]) ?>
					    <?php endif; ?>
                    </td>
                 <?php break; endif; endforeach; ?>	
		</div>
		<?php
		$i++;
		if(($i % 3) == 0) : ?>
	</div>
	<div class="row team">
		<?php  endif; endforeach; ?>
	</div>
</div>
       