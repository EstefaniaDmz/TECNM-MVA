<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AsentamientoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AsentamientoTable Test Case
 */
class AsentamientoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AsentamientoTable
     */
    protected $Asentamiento;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Asentamiento',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Asentamiento') ? [] : ['className' => AsentamientoTable::class];
        $this->Asentamiento = $this->getTableLocator()->get('Asentamiento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Asentamiento);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AsentamientoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
