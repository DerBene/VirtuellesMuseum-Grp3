<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="content">
<h2><?= __('Suchergebnisse') ?></h2>
<?php if($suche == false): ?>
    <h3>Keine Suchergebnisse!</h3>
<?php elseif($suche == true): ?>
    <h3>Suche nach: <?php echo $searchvalue['Search']['searchvalue']; ?></h3>

<div class="epochen index columns content">
<?php if(sizeof($epochen) == 0): ?>
    <h4>Keine Suchergebnisse in Epochen ...</h4>
    </div>
<?php else: ?>
    <h3><?= __('Epochen') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('E_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ende') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($epochen as $epochen): ?>
            <tr>
                <td><?= $this->Number->format($epochen->E_ID) ?></td>
                <td><?= h($epochen->Start) ?></td>
                <td><?= h($epochen->Ende) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $epochen->E_ID]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
<?php endif; ?>

<div class="kategorien index columns content">
<?php if(sizeof($kategorien) == 0): ?>
    <h4>Keine Suchergebnisse in Kategorien ...</h4>
    </div>
<?php else: ?>
    <h3><?= __('Kategorien') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Kat_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Unterkategorie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Beschreibung') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kategorien as $kategorien): ?>
            <tr>
                <td><?= $this->Number->format($kategorien->Kat_ID) ?></td>
                <td><?= h($kategorien->Name) ?></td>
                <td><?= h($kategorien->Unterkategorie) ?></td>
                <td><?= h($kategorien->Beschreibung) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $kategorien->Kat_ID]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
<?php endif; ?>

<div class="persoenlichkeiten index columns content">
<?php if(sizeof($persoenlichkeiten) == 0): ?>
    <h4>Keine Suchergebnisse in Pers&ouml;nlichkeiten ...</h4>
    </div>
<?php else: ?>
    <h3><?= __('Persoenlichkeiten') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Pers_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Kurzbeschreibung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Zitat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LangerText') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BiografischeDaten') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Freischaltung') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persoenlichkeiten as $persoenlichkeiten): ?>
            <tr>
                <td><?= $this->Number->format($persoenlichkeiten->Pers_ID) ?></td>
                <td><?= h($persoenlichkeiten->Name) ?></td>
                <td><?= h($persoenlichkeiten->Kurzbeschreibung) ?></td>
                <td><?= h($persoenlichkeiten->Zitat) ?></td>
                <td><?= h($persoenlichkeiten->LangerText) ?></td>
                <td><?= h($persoenlichkeiten->BiografischeDaten) ?></td>
                <td><?= h($persoenlichkeiten->Freischaltung) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $persoenlichkeiten->Pers_ID]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
<?php endif; ?>

<div class="geographisch index columns content">
<?php if(sizeof($geographisch) == 0): ?>
    <h4>Keine Suchergebnisse in Geographisch ...</h4>
    </div>
<?php else: ?>
    <h3><?= __('Geographisch') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Graph_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Beschreibung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Ort') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Land') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($geographisch as $geographisch): ?>
            <tr>
                <td><?= $this->Number->format($geographisch->Graph_ID) ?></td>
                <td><?= h($geographisch->Beschreibung) ?></td>
                <td><?= h($geographisch->Ort) ?></td>
                <td><?= h($geographisch->Land) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $geographisch->Graph_ID]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
<?php endif; ?>

<div class="medien index columns content">
<?php if(sizeof($medien) == 0): ?>
    <h4>Keine Suchergebnisse in Medien ...</h4>
    </div>
<?php else: ?>
    <h3><?= __('Medien') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Med_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Typ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dateipfad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Urheber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Erscheinungsdatum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Freischaltung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Persoenlichkeiten_Pers_ID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medien as $medien): ?>
            <tr>
                <td><?= $this->Number->format($medien->Med_ID) ?></td>
                <td><?= h($medien->Typ) ?></td>
                <td><?= h($medien->Dateipfad) ?></td>
                <td><?= h($medien->Urheber) ?></td>
                <td><?= h($medien->Erscheinungsdatum) ?></td>
                <td><?= h($medien->Freischaltung) ?></td>
                <td><?= $this->Number->format($medien->Persoenlichkeiten_Pers_ID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $medien->Med_ID]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
<?php endif; ?>

<div class="werke index columns content">
<?php if(sizeof($werke) == 0): ?>
    <h4>Keine Suchergebnisse in Werke ...</h4>
    </div>
<?php else: ?>
    <h3><?= __('Werke') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Werk_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Titel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Typ') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dateipfad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Urheber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Erscheinungsdatum') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Freischaltung') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Geographisch_Graph_ID') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($werke as $werke): ?>
            <tr>
                <td><?= $this->Number->format($werke->Werk_ID) ?></td>
                <td><?= h($werke->Titel) ?></td>
                <td><?= h($werke->Typ) ?></td>
                <td><?= h($werke->Dateipfad) ?></td>
                <td><?= h($werke->Urheber) ?></td>
                <td><?= h($werke->Erscheinungsdatum) ?></td>
                <td><?= h($werke->Freischaltung) ?></td>
                <td><?= $this->Number->format($werke->Geographisch_Graph_ID) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $werke->Werk_ID]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
<?php endif; ?>
<?php endif; ?>
</div>