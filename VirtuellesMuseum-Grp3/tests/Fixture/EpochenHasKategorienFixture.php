<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EpochenHasKategorienFixture
 *
 */
class EpochenHasKategorienFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'epochen_has_kategorien';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Epochen_E_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Kategorien_Kat_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Epochen_has_Kategorien_Kategorien1_idx' => ['type' => 'index', 'columns' => ['Kategorien_Kat_ID'], 'length' => []],
            'fk_Epochen_has_Kategorien_Epochen1_idx' => ['type' => 'index', 'columns' => ['Epochen_E_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Epochen_E_ID', 'Kategorien_Kat_ID'], 'length' => []],
            'fk_Epochen_has_Kategorien_Epochen1' => ['type' => 'foreign', 'columns' => ['Epochen_E_ID'], 'references' => ['epochen', 'E_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_Epochen_has_Kategorien_Kategorien1' => ['type' => 'foreign', 'columns' => ['Kategorien_Kat_ID'], 'references' => ['kategorien', 'Kat_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'Epochen_E_ID' => 1,
            'Kategorien_Kat_ID' => 1
        ],
    ];
}
