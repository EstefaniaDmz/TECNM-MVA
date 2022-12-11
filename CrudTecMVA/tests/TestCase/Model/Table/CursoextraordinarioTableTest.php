<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CursoextraordinarioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CursoextraordinarioTable Test Case
 */
class CursoextraordinarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CursoextraordinarioTable
     */
    protected $Cursoextraordinario;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Cursoextraordinario',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Cursoextraordinario') ? [] : ['className' => CursoextraordinarioTable::class];
        $this->Cursoextraordinario = $this->getTableLocator()->get('Cursoextraordinario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Cursoextraordinario);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CursoextraordinarioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
