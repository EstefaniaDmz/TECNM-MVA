<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlumnoactividadTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlumnoactividadTable Test Case
 */
class AlumnoactividadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlumnoactividadTable
     */
    protected $Alumnoactividad;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Alumnoactividad',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Alumnoactividad') ? [] : ['className' => AlumnoactividadTable::class];
        $this->Alumnoactividad = $this->getTableLocator()->get('Alumnoactividad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Alumnoactividad);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AlumnoactividadTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
