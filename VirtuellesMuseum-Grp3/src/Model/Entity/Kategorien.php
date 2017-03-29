<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kategorien Entity
 *
 * @property int $Kat_ID
 * @property string $Name
 * @property string $Unterkategorie
 * @property string $Beschreibung
 */
class Kategorien extends Entity
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
        'Kat_ID' => false
    ];
}
