<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EpochenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EpochenTable Test Case
 */
class EpochenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EpochenTable
     */
    public $Epochen;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.epochen'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Epochen') ? [] : ['className' => 'App\Model\Table\EpochenTable'];
        $this->Epochen = TableRegistry::get('Epochen', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Epochen);

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
