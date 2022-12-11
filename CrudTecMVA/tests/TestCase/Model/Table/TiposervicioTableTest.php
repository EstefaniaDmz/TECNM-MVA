<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposervicioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposervicioTable Test Case
 */
class TiposervicioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposervicioTable
     */
    protected $Tiposervicio;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tiposervicio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tiposervicio') ? [] : ['className' => TiposervicioTable::class];
        $this->Tiposervicio = $this->getTableLocator()->get('Tiposervicio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tiposervicio);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TiposervicioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
