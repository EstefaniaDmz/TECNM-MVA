<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PrestamoprefecturaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PrestamoprefecturaTable Test Case
 */
class PrestamoprefecturaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PrestamoprefecturaTable
     */
    protected $Prestamoprefectura;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Prestamoprefectura',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Prestamoprefectura') ? [] : ['className' => PrestamoprefecturaTable::class];
        $this->Prestamoprefectura = $this->getTableLocator()->get('Prestamoprefectura', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Prestamoprefectura);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PrestamoprefecturaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
