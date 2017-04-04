<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Werke Entity
 *
 * @property int $Werk_ID
 * @property string $Titel
 * @property string $Typ
 * @property string $Dateipfad
 * @property string $Urheber
 * @property string $Erscheinungsdatum
 * @property bool $Freischaltung
 * @property int $Geographisch_Graph_ID
 */
class Werke extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'Werk_ID' => false,
        'Geographisch_Graph_ID' => false
    ];
}
