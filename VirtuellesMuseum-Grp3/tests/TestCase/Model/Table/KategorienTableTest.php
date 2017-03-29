<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\KategorienTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\KategorienTable Test Case
 */
class KategorienTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\KategorienTable
     */
    public $Kategorien;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.kategorien'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Kategorien') ? [] : ['className' => 'App\Model\Table\KategorienTable'];
        $this->Kategorien = TableRegistry::get('Kategorien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Kategorien);

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
