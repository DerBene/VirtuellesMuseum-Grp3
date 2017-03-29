<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WerkeHasPersoenlichkeitenFixture
 *
 */
class WerkeHasPersoenlichkeitenFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'werke_has_persoenlichkeiten';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Werke_Werk_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Persoenlichkeiten_Pers_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Werke_has_Persönlichkeiten_Persönlichkeiten1_idx' => ['type' => 'index', 'columns' => ['Persoenlichkeiten_Pers_ID'], 'length' => []],
            'fk_Werke_has_Persönlichkeiten_Werke1_idx' => ['type' => 'index', 'columns' => ['Werke_Werk_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Werke_Werk_ID', 'Persoenlichkeiten_Pers_ID'], 'length' => []],
            'fk_Werke_has_Persönlichkeiten_Persönlichkeiten1' => ['type' => 'foreign', 'columns' => ['Persoenlichkeiten_Pers_ID'], 'references' => ['persoenlichkeiten', 'Pers_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Werke_has_Persönlichkeiten_Werke1' => ['type' => 'foreign', 'columns' => ['Werke_Werk_ID'], 'references' => ['werke', 'Werk_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'Werke_Werk_ID' => 1,
            'Persoenlichkeiten_Pers_ID' => 1
        ],
    ];
}
