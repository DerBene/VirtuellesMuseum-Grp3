<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WerkeHasPersoenlichkeitenTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WerkeHasPersoenlichkeitenTable Test Case
 */
class WerkeHasPersoenlichkeitenTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WerkeHasPersoenlichkeitenTable
     */
    public $WerkeHasPersoenlichkeiten;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.werke_has_persoenlichkeiten'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WerkeHasPersoenlichkeiten') ? [] : ['className' => 'App\Model\Table\WerkeHasPersoenlichkeitenTable'];
        $this->WerkeHasPersoenlichkeiten = TableRegistry::get('WerkeHasPersoenlichkeiten', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WerkeHasPersoenlichkeiten);

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
