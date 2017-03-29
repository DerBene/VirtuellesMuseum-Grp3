<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersönlichkeitenHasEpochenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersönlichkeitenHasEpochenTable Test Case
 */
class PersönlichkeitenHasEpochenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersönlichkeitenHasEpochenTable
     */
    public $PersönlichkeitenHasEpochen;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.persönlichkeiten_has_epochen'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PersönlichkeitenHasEpochen') ? [] : ['className' => 'App\Model\Table\PersönlichkeitenHasEpochenTable'];
        $this->PersönlichkeitenHasEpochen = TableRegistry::get('PersönlichkeitenHasEpochen', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PersönlichkeitenHasEpochen);

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
