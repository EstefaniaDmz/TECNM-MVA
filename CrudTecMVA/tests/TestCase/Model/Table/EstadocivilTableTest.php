<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EstadocivilTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EstadocivilTable Test Case
 */
class EstadocivilTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EstadocivilTable
     */
    protected $Estadocivil;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Estadocivil',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Estadocivil') ? [] : ['className' => EstadocivilTable::class];
        $this->Estadocivil = $this->getTableLocator()->get('Estadocivil', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Estadocivil);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EstadocivilTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
