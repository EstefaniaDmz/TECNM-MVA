<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServicioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServicioTable Test Case
 */
class ServicioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServicioTable
     */
    protected $Servicio;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Servicio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Servicio') ? [] : ['className' => ServicioTable::class];
        $this->Servicio = $this->getTableLocator()->get('Servicio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Servicio);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ServicioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
