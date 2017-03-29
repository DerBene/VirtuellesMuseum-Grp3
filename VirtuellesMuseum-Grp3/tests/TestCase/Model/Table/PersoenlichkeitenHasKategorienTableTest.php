<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersoenlichkeitenHasKategorienTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersoenlichkeitenHasKategorienTable Test Case
 */
class PersoenlichkeitenHasKategorienTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersoenlichkeitenHasKategorienTable
     */
    public $PersoenlichkeitenHasKategorien;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.persoenlichkeiten_has_kategorien'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PersoenlichkeitenHasKategorien') ? [] : ['className' => 'App\Model\Table\PersoenlichkeitenHasKategorienTable'];
        $this->PersoenlichkeitenHasKategorien = TableRegistry::get('PersoenlichkeitenHasKategorien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PersoenlichkeitenHasKategorien);

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
