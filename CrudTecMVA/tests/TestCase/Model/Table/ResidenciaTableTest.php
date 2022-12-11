<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ResidenciaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ResidenciaTable Test Case
 */
class ResidenciaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ResidenciaTable
     */
    protected $Residencia;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Residencia',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Residencia') ? [] : ['className' => ResidenciaTable::class];
        $this->Residencia = $this->getTableLocator()->get('Residencia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Residencia);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ResidenciaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
