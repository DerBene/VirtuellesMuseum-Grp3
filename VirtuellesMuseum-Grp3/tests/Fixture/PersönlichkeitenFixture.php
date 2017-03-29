<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PersönlichkeitenFixture
 *
 */
class PersönlichkeitenFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'persönlichkeiten';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Pers_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Name' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Kurzbeschreibung' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Zitat' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Langer Text' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Biografische Daten' => ['type' => 'string', 'length' => 150, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Freischaltung' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Pers_ID'], 'length' => []],
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
            'Pers_ID' => 1,
            'Name' => 'Lorem ipsum dolor sit amet',
            'Kurzbeschreibung' => 'Lorem ipsum dolor sit amet',
            'Zitat' => 'Lorem ipsum dolor sit amet',
            'Langer Text' => 'Lorem ipsum dolor sit amet',
            'Biografische Daten' => 'Lorem ipsum dolor sit amet',
            'Freischaltung' => 1
        ],
    ];
}
