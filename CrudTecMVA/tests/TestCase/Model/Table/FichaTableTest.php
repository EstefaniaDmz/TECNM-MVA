<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FichaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FichaTable Test Case
 */
class FichaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FichaTable
     */
    protected $Ficha;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ficha',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ficha') ? [] : ['className' => FichaTable::class];
        $this->Ficha = $this->getTableLocator()->get('Ficha', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ficha);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\FichaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
