<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoorganizacionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoorganizacionTable Test Case
 */
class TipoorganizacionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoorganizacionTable
     */
    protected $Tipoorganizacion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipoorganizacion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipoorganizacion') ? [] : ['className' => TipoorganizacionTable::class];
        $this->Tipoorganizacion = $this->getTableLocator()->get('Tipoorganizacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipoorganizacion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipoorganizacionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
