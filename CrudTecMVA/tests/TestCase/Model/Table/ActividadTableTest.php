<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActividadTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActividadTable Test Case
 */
class ActividadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActividadTable
     */
    protected $Actividad;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Actividad',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Actividad') ? [] : ['className' => ActividadTable::class];
        $this->Actividad = $this->getTableLocator()->get('Actividad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Actividad);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ActividadTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
