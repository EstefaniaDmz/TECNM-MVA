<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HoraTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HoraTable Test Case
 */
class HoraTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\HoraTable
     */
    protected $Hora;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Hora',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Hora') ? [] : ['className' => HoraTable::class];
        $this->Hora = $this->getTableLocator()->get('Hora', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Hora);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\HoraTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
