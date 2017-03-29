<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedienTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedienTable Test Case
 */
class MedienTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MedienTable
     */
    public $Medien;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.medien'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Medien') ? [] : ['className' => 'App\Model\Table\MedienTable'];
        $this->Medien = TableRegistry::get('Medien', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Medien);

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
