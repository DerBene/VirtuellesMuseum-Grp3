	<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Liste Persoenlichkeiten auf'), ['action' => 'index']) ?> </li>
        <li><a href="/VirtuellesMuseum-Grp3/PersoenlichkeitenHasEpochen">Abh&auml;ngigkeiten zu Epochen anzeigen</a></li>
        <li><a href="/VirtuellesMuseum-Grp3/PersoenlichkeitenHasKategorien">Abh&auml;ngigkeiten zu Kategorien anzeigen</a></li>
    </ul>
</nav>
<div class="persoenlichkeiten view large-9 medium-8 columns content">
			<div class="row team">
						<h4><?= h($persoenlichkeiten->Name) ?></h4>
						<h5><?= h($persoenlichkeiten->Kurzbeschreibung) ?></h5>
						<h5><?= h($persoenlichkeiten->Zitat) ?></h5>
						<h5><?= h($persoenlichkeiten->LangerText) ?></h5>
						<h5><?= h($persoenlichkeiten->BiografischeDaten) ?></h5>
				
			</div>
</div>
