<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolicitudherramientaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolicitudherramientaTable Test Case
 */
class SolicitudherramientaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SolicitudherramientaTable
     */
    protected $Solicitudherramienta;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Solicitudherramienta',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Solicitudherramienta') ? [] : ['className' => SolicitudherramientaTable::class];
        $this->Solicitudherramienta = $this->getTableLocator()->get('Solicitudherramienta', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Solicitudherramienta);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SolicitudherramientaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
