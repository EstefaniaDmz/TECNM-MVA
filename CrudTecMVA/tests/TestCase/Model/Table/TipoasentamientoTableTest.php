<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoasentamientoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoasentamientoTable Test Case
 */
class TipoasentamientoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoasentamientoTable
     */
    protected $Tipoasentamiento;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipoasentamiento',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipoasentamiento') ? [] : ['className' => TipoasentamientoTable::class];
        $this->Tipoasentamiento = $this->getTableLocator()->get('Tipoasentamiento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipoasentamiento);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipoasentamientoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
