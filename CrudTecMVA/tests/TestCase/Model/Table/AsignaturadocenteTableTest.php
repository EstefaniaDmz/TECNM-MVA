<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsignaturadocenteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsignaturadocenteTable Test Case
 */
class AsignaturadocenteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AsignaturadocenteTable
     */
    protected $Asignaturadocente;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Asignaturadocente',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Asignaturadocente') ? [] : ['className' => AsignaturadocenteTable::class];
        $this->Asignaturadocente = $this->getTableLocator()->get('Asignaturadocente', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Asignaturadocente);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AsignaturadocenteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
