<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MedienFixture
 *
 */
class MedienFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'medien';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Med_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Typ' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Dateipfad' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Urheber' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Erscheinungsdatum' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'Freischaltung' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'Persönlichkeiten_Pers_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_Medien_Persönlichkeiten1_idx' => ['type' => 'index', 'columns' => ['Persönlichkeiten_Pers_ID'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Med_ID', 'Persönlichkeiten_Pers_ID'], 'length' => []],
            'fk_Medien_Persönlichkeiten1' => ['type' => 'foreign', 'columns' => ['Persönlichkeiten_Pers_ID'], 'references' => ['persönlichkeiten', 'Pers_ID'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
            'Med_ID' => 1,
            'Typ' => 'Lorem ipsum dolor sit amet',
            'Dateipfad' => 'Lorem ipsum dolor sit amet',
            'Urheber' => 'Lorem ipsum dolor sit amet',
            'Erscheinungsdatum' => 'Lorem ipsum dolor sit amet',
            'Freischaltung' => 1,
            'Persönlichkeiten_Pers_ID' => 1
        ],
    ];
}
