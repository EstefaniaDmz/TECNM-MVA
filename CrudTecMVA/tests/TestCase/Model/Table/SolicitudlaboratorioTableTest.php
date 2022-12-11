<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolicitudlaboratorioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolicitudlaboratorioTable Test Case
 */
class SolicitudlaboratorioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SolicitudlaboratorioTable
     */
    protected $Solicitudlaboratorio;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Solicitudlaboratorio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Solicitudlaboratorio') ? [] : ['className' => SolicitudlaboratorioTable::class];
        $this->Solicitudlaboratorio = $this->getTableLocator()->get('Solicitudlaboratorio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Solicitudlaboratorio);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SolicitudlaboratorioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
