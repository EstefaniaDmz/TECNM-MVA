<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlumnoasignaturadocenteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlumnoasignaturadocenteTable Test Case
 */
class AlumnoasignaturadocenteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlumnoasignaturadocenteTable
     */
    protected $Alumnoasignaturadocente;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Alumnoasignaturadocente',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Alumnoasignaturadocente') ? [] : ['className' => AlumnoasignaturadocenteTable::class];
        $this->Alumnoasignaturadocente = $this->getTableLocator()->get('Alumnoasignaturadocente', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Alumnoasignaturadocente);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AlumnoasignaturadocenteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
