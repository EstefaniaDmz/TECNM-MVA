<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PagoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PagoTable Test Case
 */
class PagoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PagoTable
     */
    protected $Pago;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pago',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pago') ? [] : ['className' => PagoTable::class];
        $this->Pago = $this->getTableLocator()->get('Pago', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pago);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PagoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
