<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EdificioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EdificioTable Test Case
 */
class EdificioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EdificioTable
     */
    protected $Edificio;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Edificio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Edificio') ? [] : ['className' => EdificioTable::class];
        $this->Edificio = $this->getTableLocator()->get('Edificio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Edificio);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EdificioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
