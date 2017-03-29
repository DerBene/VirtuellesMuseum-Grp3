<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersoenlichkeitenHasEpochenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersoenlichkeitenHasEpochenTable Test Case
 */
class PersoenlichkeitenHasEpochenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersoenlichkeitenHasEpochenTable
     */
    public $PersoenlichkeitenHasEpochen;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.persoenlichkeiten_has_epochen'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PersoenlichkeitenHasEpochen') ? [] : ['className' => 'App\Model\Table\PersoenlichkeitenHasEpochenTable'];
        $this->PersoenlichkeitenHasEpochen = TableRegistry::get('PersoenlichkeitenHasEpochen', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PersoenlichkeitenHasEpochen);

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
