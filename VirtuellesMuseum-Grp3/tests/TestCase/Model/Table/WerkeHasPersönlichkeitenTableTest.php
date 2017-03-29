<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WerkeHasPersönlichkeitenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WerkeHasPersönlichkeitenTable Test Case
 */
class WerkeHasPersönlichkeitenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WerkeHasPersönlichkeitenTable
     */
    public $WerkeHasPersönlichkeiten;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.werke_has_persönlichkeiten'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WerkeHasPersönlichkeiten') ? [] : ['className' => 'App\Model\Table\WerkeHasPersönlichkeitenTable'];
        $this->WerkeHasPersönlichkeiten = TableRegistry::get('WerkeHasPersönlichkeiten', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WerkeHasPersönlichkeiten);

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
