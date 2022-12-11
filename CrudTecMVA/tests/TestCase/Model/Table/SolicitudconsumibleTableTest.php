<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SolicitudconsumibleTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SolicitudconsumibleTable Test Case
 */
class SolicitudconsumibleTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SolicitudconsumibleTable
     */
    protected $Solicitudconsumible;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Solicitudconsumible',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Solicitudconsumible') ? [] : ['className' => SolicitudconsumibleTable::class];
        $this->Solicitudconsumible = $this->getTableLocator()->get('Solicitudconsumible', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Solicitudconsumible);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SolicitudconsumibleTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
