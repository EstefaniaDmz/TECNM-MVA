<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlumnotutorTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlumnotutorTable Test Case
 */
class AlumnotutorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlumnotutorTable
     */
    protected $Alumnotutor;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Alumnotutor',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Alumnotutor') ? [] : ['className' => AlumnotutorTable::class];
        $this->Alumnotutor = $this->getTableLocator()->get('Alumnotutor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Alumnotutor);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AlumnotutorTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
