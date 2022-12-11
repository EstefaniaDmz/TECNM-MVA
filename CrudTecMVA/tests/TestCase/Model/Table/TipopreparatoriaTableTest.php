<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipopreparatoriaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipopreparatoriaTable Test Case
 */
class TipopreparatoriaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipopreparatoriaTable
     */
    protected $Tipopreparatoria;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipopreparatoria',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipopreparatoria') ? [] : ['className' => TipopreparatoriaTable::class];
        $this->Tipopreparatoria = $this->getTableLocator()->get('Tipopreparatoria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipopreparatoria);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipopreparatoriaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
