<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WerkeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WerkeTable Test Case
 */
class WerkeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WerkeTable
     */
    public $Werke;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.werke'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Werke') ? [] : ['className' => 'App\Model\Table\WerkeTable'];
        $this->Werke = TableRegistry::get('Werke', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Werke);

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
