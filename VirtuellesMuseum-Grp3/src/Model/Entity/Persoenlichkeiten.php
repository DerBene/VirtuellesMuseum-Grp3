<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Persoenlichkeiten Entity
 *
 * @property int $Pers_ID
 * @property string $Name
 * @property string $Kurzbeschreibung
 * @property string $Zitat
 * @property string $LangerText
 * @property string $BiografischeDaten
 * @property bool $Freischaltung
 */
class Persoenlichkeiten extends Entity
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
        'Pers_ID' => false
    ];
}
