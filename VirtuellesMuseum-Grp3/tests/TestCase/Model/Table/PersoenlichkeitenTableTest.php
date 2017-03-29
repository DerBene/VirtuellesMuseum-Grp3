<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PersoenlichkeitenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PersoenlichkeitenTable Test Case
 */
class PersoenlichkeitenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PersoenlichkeitenTable
     */
    public $Persoenlichkeiten;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.persoenlichkeiten'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Persoenlichkeiten') ? [] : ['className' => 'App\Model\Table\PersoenlichkeitenTable'];
        $this->Persoenlichkeiten = TableRegistry::get('Persoenlichkeiten', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Persoenlichkeiten);

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
