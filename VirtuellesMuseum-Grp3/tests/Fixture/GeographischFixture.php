<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GeographischFixture
 *
 */
class GeographischFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'geographisch';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Graph_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Beschreibung' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Ort' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Land' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Graph_ID'], 'length' => []],
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
            'Graph_ID' => 1,
            'Beschreibung' => 'Lorem ipsum dolor sit amet',
            'Ort' => 'Lorem ipsum dolor sit amet',
            'Land' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
