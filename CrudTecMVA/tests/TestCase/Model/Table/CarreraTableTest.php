<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CarreraTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CarreraTable Test Case
 */
class CarreraTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CarreraTable
     */
    protected $Carrera;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Carrera',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Carrera') ? [] : ['className' => CarreraTable::class];
        $this->Carrera = $this->getTableLocator()->get('Carrera', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Carrera);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CarreraTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
