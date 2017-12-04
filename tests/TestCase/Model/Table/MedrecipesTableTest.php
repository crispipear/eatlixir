<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MedrecipesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MedrecipesTable Test Case
 */
class MedrecipesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MedrecipesTable
     */
    public $Medrecipes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.medrecipes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Medrecipes') ? [] : ['className' => MedrecipesTable::class];
        $this->Medrecipes = TableRegistry::get('Medrecipes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Medrecipes);

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
