<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlumnocursoextraTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlumnocursoextraTable Test Case
 */
class AlumnocursoextraTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlumnocursoextraTable
     */
    protected $Alumnocursoextra;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Alumnocursoextra',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Alumnocursoextra') ? [] : ['className' => AlumnocursoextraTable::class];
        $this->Alumnocursoextra = $this->getTableLocator()->get('Alumnocursoextra', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Alumnocursoextra);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AlumnocursoextraTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
