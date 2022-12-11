<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PreparatoriaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PreparatoriaTable Test Case
 */
class PreparatoriaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PreparatoriaTable
     */
    protected $Preparatoria;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Preparatoria',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Preparatoria') ? [] : ['className' => PreparatoriaTable::class];
        $this->Preparatoria = $this->getTableLocator()->get('Preparatoria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Preparatoria);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PreparatoriaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
