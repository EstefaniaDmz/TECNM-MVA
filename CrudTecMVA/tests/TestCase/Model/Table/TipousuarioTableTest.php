<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipousuarioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipousuarioTable Test Case
 */
class TipousuarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipousuarioTable
     */
    protected $Tipousuario;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipousuario',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipousuario') ? [] : ['className' => TipousuarioTable::class];
        $this->Tipousuario = $this->getTableLocator()->get('Tipousuario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipousuario);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipousuarioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
