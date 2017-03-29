<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PersoenlichkeitenHasKategorien Entity
 *
 * @property int $Persoenlichkeiten_Pers_ID
 * @property int $Kategorien_Kat_ID
 */
class PersoenlichkeitenHasKategorien extends Entity
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
        'Persoenlichkeiten_Pers_ID' => false,
        'Kategorien_Kat_ID' => false
    ];
}
