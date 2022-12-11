<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsignaturaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsignaturaTable Test Case
 */
class AsignaturaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AsignaturaTable
     */
    protected $Asignatura;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Asignatura',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Asignatura') ? [] : ['className' => AsignaturaTable::class];
        $this->Asignatura = $this->getTableLocator()->get('Asignatura', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Asignatura);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AsignaturaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
