<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersoenlichkeitenHasEpochenFixture
 *
 */
class PersoenlichkeitenHasEpochenFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'persoenlichkeiten_has_epochen';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Persoenlichkeiten_Pers_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Epochen_E_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Persönlichkeiten_has_Epochen_Epochen1_idx' => ['type' => 'index', 'columns' => ['Epochen_E_ID'], 'length' => []],
            'fk_Persönlichkeiten_has_Epochen_Persönlichkeiten1_idx' => ['type' => 'index', 'columns' => ['Persoenlichkeiten_Pers_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Persoenlichkeiten_Pers_ID', 'Epochen_E_ID'], 'length' => []],
            'fk_Persönlichkeiten_has_Epochen_Epochen1' => ['type' => 'foreign', 'columns' => ['Epochen_E_ID'], 'references' => ['epochen', 'E_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Persönlichkeiten_has_Epochen_Persönlichkeiten1' => ['type' => 'foreign', 'columns' => ['Persoenlichkeiten_Pers_ID'], 'references' => ['persoenlichkeiten', 'Pers_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'Persoenlichkeiten_Pers_ID' => 1,
            'Epochen_E_ID' => 1
        ],
    ];
}
