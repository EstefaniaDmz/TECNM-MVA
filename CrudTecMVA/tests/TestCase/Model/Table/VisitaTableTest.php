<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VisitaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VisitaTable Test Case
 */
class VisitaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\VisitaTable
     */
    protected $Visita;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Visita',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Visita') ? [] : ['className' => VisitaTable::class];
        $this->Visita = $this->getTableLocator()->get('Visita', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Visita);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\VisitaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
