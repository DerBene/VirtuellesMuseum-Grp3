<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersönlichkeitenHasKategorienFixture
 *
 */
class PersönlichkeitenHasKategorienFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'persönlichkeiten_has_kategorien';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Persönlichkeiten_Pers_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Kategorien_Kat_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Persönlichkeiten_has_Kategorien_Kategorien1_idx' => ['type' => 'index', 'columns' => ['Kategorien_Kat_ID'], 'length' => []],
            'fk_Persönlichkeiten_has_Kategorien_Persönlichkeiten1_idx' => ['type' => 'index', 'columns' => ['Persönlichkeiten_Pers_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Persönlichkeiten_Pers_ID', 'Kategorien_Kat_ID'], 'length' => []],
            'fk_Persönlichkeiten_has_Kategorien_Kategorien1' => ['type' => 'foreign', 'columns' => ['Kategorien_Kat_ID'], 'references' => ['kategorien', 'Kat_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Persönlichkeiten_has_Kategorien_Persönlichkeiten1' => ['type' => 'foreign', 'columns' => ['Persönlichkeiten_Pers_ID'], 'references' => ['persönlichkeiten', 'Pers_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'Persönlichkeiten_Pers_ID' => 1,
            'Kategorien_Kat_ID' => 1
        ],
    ];
}
