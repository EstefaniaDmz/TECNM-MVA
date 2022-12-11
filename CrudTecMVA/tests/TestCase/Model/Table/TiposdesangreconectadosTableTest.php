<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposdesangreconectadosTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposdesangreconectadosTable Test Case
 */
class TiposdesangreconectadosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposdesangreconectadosTable
     */
    protected $Tiposdesangreconectados;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tiposdesangreconectados',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tiposdesangreconectados') ? [] : ['className' => TiposdesangreconectadosTable::class];
        $this->Tiposdesangreconectados = $this->getTableLocator()->get('Tiposdesangreconectados', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tiposdesangreconectados);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TiposdesangreconectadosTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
