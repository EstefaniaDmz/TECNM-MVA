<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsignaturacarreraTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsignaturacarreraTable Test Case
 */
class AsignaturacarreraTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AsignaturacarreraTable
     */
    protected $Asignaturacarrera;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Asignaturacarrera',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Asignaturacarrera') ? [] : ['className' => AsignaturacarreraTable::class];
        $this->Asignaturacarrera = $this->getTableLocator()->get('Asignaturacarrera', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Asignaturacarrera);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AsignaturacarreraTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
