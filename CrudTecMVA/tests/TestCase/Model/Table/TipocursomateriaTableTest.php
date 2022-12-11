<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipocursomateriaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipocursomateriaTable Test Case
 */
class TipocursomateriaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipocursomateriaTable
     */
    protected $Tipocursomateria;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipocursomateria',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipocursomateria') ? [] : ['className' => TipocursomateriaTable::class];
        $this->Tipocursomateria = $this->getTableLocator()->get('Tipocursomateria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipocursomateria);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipocursomateriaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
