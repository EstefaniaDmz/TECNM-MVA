<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolicitudsoftwareTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolicitudsoftwareTable Test Case
 */
class SolicitudsoftwareTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SolicitudsoftwareTable
     */
    protected $Solicitudsoftware;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Solicitudsoftware',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Solicitudsoftware') ? [] : ['className' => SolicitudsoftwareTable::class];
        $this->Solicitudsoftware = $this->getTableLocator()->get('Solicitudsoftware', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Solicitudsoftware);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SolicitudsoftwareTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
