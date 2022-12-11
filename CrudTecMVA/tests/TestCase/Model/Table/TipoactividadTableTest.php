<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoactividadTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoactividadTable Test Case
 */
class TipoactividadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoactividadTable
     */
    protected $Tipoactividad;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipoactividad',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipoactividad') ? [] : ['className' => TipoactividadTable::class];
        $this->Tipoactividad = $this->getTableLocator()->get('Tipoactividad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipoactividad);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipoactividadTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
