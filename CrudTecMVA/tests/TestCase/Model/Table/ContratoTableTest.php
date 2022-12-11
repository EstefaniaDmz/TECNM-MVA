<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContratoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContratoTable Test Case
 */
class ContratoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContratoTable
     */
    protected $Contrato;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Contrato',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Contrato') ? [] : ['className' => ContratoTable::class];
        $this->Contrato = $this->getTableLocator()->get('Contrato', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Contrato);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ContratoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
