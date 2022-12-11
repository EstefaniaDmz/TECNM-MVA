<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpleadodocumentoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpleadodocumentoTable Test Case
 */
class EmpleadodocumentoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpleadodocumentoTable
     */
    protected $Empleadodocumento;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Empleadodocumento',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Empleadodocumento') ? [] : ['className' => EmpleadodocumentoTable::class];
        $this->Empleadodocumento = $this->getTableLocator()->get('Empleadodocumento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Empleadodocumento);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EmpleadodocumentoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
