<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeographischTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeographischTable Test Case
 */
class GeographischTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\GeographischTable
     */
    public $Geographisch;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.geographisch'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Geographisch') ? [] : ['className' => 'App\Model\Table\GeographischTable'];
        $this->Geographisch = TableRegistry::get('Geographisch', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Geographisch);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
