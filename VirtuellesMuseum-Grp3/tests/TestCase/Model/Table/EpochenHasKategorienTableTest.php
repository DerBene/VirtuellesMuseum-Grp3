<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EpochenHasKategorienTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EpochenHasKategorienTable Test Case
 */
class EpochenHasKategorienTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EpochenHasKategorienTable
     */
    public $EpochenHasKategorien;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.epochen_has_kategorien'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EpochenHasKategorien') ? [] : ['className' => 'App\Model\Table\EpochenHasKategorienTable'];
        $this->EpochenHasKategorien = TableRegistry::get('EpochenHasKategorien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EpochenHasKategorien);

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
