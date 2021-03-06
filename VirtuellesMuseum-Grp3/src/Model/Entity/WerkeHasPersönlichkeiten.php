<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WerkeHasPersönlichkeiten Entity
 *
 * @property int $Werke_Werk_ID
 * @property int $Persönlichkeiten_Pers_ID
 */
class WerkeHasPersönlichkeiten extends Entity
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
        'Werke_Werk_ID' => false,
        'Persönlichkeiten_Pers_ID' => false
    ];
}
