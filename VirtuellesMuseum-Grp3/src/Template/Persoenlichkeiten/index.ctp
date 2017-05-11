<?php
/**
  * @var \App\View\AppView $this
  */
  $i = 0;
?>
<div class="container">
	<div class="row">
		<?php foreach ($persoenlichkeiten as $p): ?>
		<div class="col-lg-4">
		        <?php foreach($medien as $m): 
                if($m->persoenlichkeiten_pers_id == $p->Pers_ID): ?>
				<img  class="squared" alt="Photo" src="<?= h($m->dateipfad)?>" width="340" height="270">
				<h2><?= h($p->Name) ?></h4>
				<h5><?= h($p->Zitat) ?></h5>
				<p><?= h($p->Kurzbeschreibung) ?></p>
					<td class="actions">
						<?= $this->Html->link(__('Anzeigen'), ['action' => 'view', $p->Pers_ID], ['class' => 'btn btn-secondary']) ?>
						<?php if ($login == true): ?>
						<?= $this->Html->link(__('Bearbeiten'), ['action' => 'edit', $p->Pers_ID], ['class' => 'btn btn-secondary']) ?>
						<?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $p->Pers_ID], ['class' => 'btn btn-secondary'], ['confirm' => __('Are you sure you want to delete # {0}?', $p->Pers_ID)]) ?>
					    <?php endif; ?>
                    </td>
                 <?php break; endif; endforeach; ?>	
		</div>
		<?php
		$i++;
		if(($i % 3) == 0) : ?>
	</div>
	<div class="row" style="padding-top: 4rem">
		<?php  endif; endforeach; ?>
	</div>
</div>
       