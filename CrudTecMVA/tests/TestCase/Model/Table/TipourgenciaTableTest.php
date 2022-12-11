<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipourgenciaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipourgenciaTable Test Case
 */
class TipourgenciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipourgenciaTable
     */
    protected $Tipourgencia;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipourgencia',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipourgencia') ? [] : ['className' => TipourgenciaTable::class];
        $this->Tipourgencia = $this->getTableLocator()->get('Tipourgencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipourgencia);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipourgenciaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
