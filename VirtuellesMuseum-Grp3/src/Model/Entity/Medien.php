<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Medien Entity
 *
 * @property int $Med_ID
 * @property string $Typ
 * @property string $Dateipfad
 * @property string $Urheber
 * @property string $Erscheinungsdatum
 * @property bool $Freischaltung
 * @property int $Persönlichkeiten_Pers_ID
 */
class Medien extends Entity
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
        'Med_ID' => false,
        //'Persönlichkeiten_Pers_ID' => false
    ];
}