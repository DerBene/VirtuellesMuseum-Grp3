<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Geographisch Entity
 *
 * @property int $Graph_ID
 * @property string $Beschreibung
 * @property string $Ort
 * @property string $Land
 */
class Geographisch extends Entity
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
        'Graph_ID' => false
    ];
}
