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
<div class="persoenlichkeiten view large-9 columns content">
	<h4><?= h($persoenlichkeiten->Name) ?></h4>
		<div class="row">
			<div class="col-3">
				<h5>Kurzbeschreibung:</h5>
			</div>
			<div class="col">
				<h5><?= h($persoenlichkeiten->Kurzbeschreibung) ?></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<h5>Zitat:</h5>
			</div>
			<div class="col">
				<h5><?= h($persoenlichkeiten->Zitat) ?></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<h5>Beschreibung:</h5>
			</div>
			<div class="col">
				<h5><?= h($persoenlichkeiten->LangerText) ?></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<h5>Biographische Daten:</h5>
			</div>
			<div class="col">
				<h5><?= h($persoenlichkeiten->BiografischeDaten) ?></h5>
			</div>
		</div>
</div>
