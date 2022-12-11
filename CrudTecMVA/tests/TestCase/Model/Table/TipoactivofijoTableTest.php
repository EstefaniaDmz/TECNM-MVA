<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipoactivofijoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipoactivofijoTable Test Case
 */
class TipoactivofijoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipoactivofijoTable
     */
    protected $Tipoactivofijo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipoactivofijo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipoactivofijo') ? [] : ['className' => TipoactivofijoTable::class];
        $this->Tipoactivofijo = $this->getTableLocator()->get('Tipoactivofijo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipoactivofijo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipoactivofijoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
