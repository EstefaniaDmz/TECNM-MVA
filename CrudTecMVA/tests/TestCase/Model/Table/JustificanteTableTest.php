<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JustificanteTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JustificanteTable Test Case
 */
class JustificanteTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JustificanteTable
     */
    protected $Justificante;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Justificante',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Justificante') ? [] : ['className' => JustificanteTable::class];
        $this->Justificante = $this->getTableLocator()->get('Justificante', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Justificante);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\JustificanteTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
