<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersönlichkeitenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersönlichkeitenTable Test Case
 */
class PersönlichkeitenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersönlichkeitenTable
     */
    public $Persönlichkeiten;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.persönlichkeiten'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Persönlichkeiten') ? [] : ['className' => 'App\Model\Table\PersönlichkeitenTable'];
        $this->Persönlichkeiten = TableRegistry::get('Persönlichkeiten', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Persönlichkeiten);

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
