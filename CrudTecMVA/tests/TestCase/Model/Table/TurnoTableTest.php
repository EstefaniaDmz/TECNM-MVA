<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TurnoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TurnoTable Test Case
 */
class TurnoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TurnoTable
     */
    protected $Turno;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Turno',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Turno') ? [] : ['className' => TurnoTable::class];
        $this->Turno = $this->getTableLocator()->get('Turno', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Turno);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TurnoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
