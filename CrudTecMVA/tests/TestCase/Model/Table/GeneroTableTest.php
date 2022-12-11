<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeneroTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeneroTable Test Case
 */
class GeneroTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeneroTable
     */
    protected $Genero;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Genero',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Genero') ? [] : ['className' => GeneroTable::class];
        $this->Genero = $this->getTableLocator()->get('Genero', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Genero);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\GeneroTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
