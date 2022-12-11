<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PaisTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PaisTable Test Case
 */
class PaisTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PaisTable
     */
    protected $Pais;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Pais',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Pais') ? [] : ['className' => PaisTable::class];
        $this->Pais = $this->getTableLocator()->get('Pais', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Pais);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PaisTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
