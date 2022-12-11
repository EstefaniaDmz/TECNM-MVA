<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeriodoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeriodoTable Test Case
 */
class PeriodoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeriodoTable
     */
    protected $Periodo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Periodo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Periodo') ? [] : ['className' => PeriodoTable::class];
        $this->Periodo = $this->getTableLocator()->get('Periodo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Periodo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PeriodoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
