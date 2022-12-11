<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AspiranteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AspiranteTable Test Case
 */
class AspiranteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AspiranteTable
     */
    protected $Aspirante;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Aspirante',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Aspirante') ? [] : ['className' => AspiranteTable::class];
        $this->Aspirante = $this->getTableLocator()->get('Aspirante', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Aspirante);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AspiranteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\AspiranteTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
