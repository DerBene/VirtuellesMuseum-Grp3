<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersönlichkeitenHasKategorienTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersönlichkeitenHasKategorienTable Test Case
 */
class PersönlichkeitenHasKategorienTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersönlichkeitenHasKategorienTable
     */
    public $PersönlichkeitenHasKategorien;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.persönlichkeiten_has_kategorien'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PersönlichkeitenHasKategorien') ? [] : ['className' => 'App\Model\Table\PersönlichkeitenHasKategorienTable'];
        $this->PersönlichkeitenHasKategorien = TableRegistry::get('PersönlichkeitenHasKategorien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PersönlichkeitenHasKategorien);

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
