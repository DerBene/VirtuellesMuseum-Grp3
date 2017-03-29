<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WerkeFixture
 *
 */
class WerkeFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'werke';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Werk_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Typ' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Dateipfad' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Urheber' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Erscheinungsdatum' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Freischaltung' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'Geographisch_Graph_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Werke_Geographisch1_idx' => ['type' => 'index', 'columns' => ['Geographisch_Graph_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Werk_ID', 'Geographisch_Graph_ID'], 'length' => []],
            'fk_Werke_Geographisch1' => ['type' => 'foreign', 'columns' => ['Geographisch_Graph_ID'], 'references' => ['geographisch', 'Graph_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'Werk_ID' => 1,
            'Typ' => 'Lorem ipsum dolor sit amet',
            'Dateipfad' => 'Lorem ipsum dolor sit amet',
            'Urheber' => 'Lorem ipsum dolor sit amet',
            'Erscheinungsdatum' => 'Lorem ipsum dolor sit amet',
            'Freischaltung' => 1,
            'Geographisch_Graph_ID' => 1
        ],
    ];
}
