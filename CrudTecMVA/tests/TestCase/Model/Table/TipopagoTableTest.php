<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipopagoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipopagoTable Test Case
 */
class TipopagoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipopagoTable
     */
    protected $Tipopago;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipopago',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipopago') ? [] : ['className' => TipopagoTable::class];
        $this->Tipopago = $this->getTableLocator()->get('Tipopago', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipopago);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipopagoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
