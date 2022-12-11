<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ConsumibleTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ConsumibleTable Test Case
 */
class ConsumibleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ConsumibleTable
     */
    protected $Consumible;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Consumible',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Consumible') ? [] : ['className' => ConsumibleTable::class];
        $this->Consumible = $this->getTableLocator()->get('Consumible', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Consumible);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ConsumibleTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
