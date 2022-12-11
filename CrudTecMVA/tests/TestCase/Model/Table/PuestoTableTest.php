<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PuestoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PuestoTable Test Case
 */
class PuestoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PuestoTable
     */
    protected $Puesto;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Puesto',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Puesto') ? [] : ['className' => PuestoTable::class];
        $this->Puesto = $this->getTableLocator()->get('Puesto', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Puesto);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PuestoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
