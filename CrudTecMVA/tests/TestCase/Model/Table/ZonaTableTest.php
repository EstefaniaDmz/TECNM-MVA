<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZonaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZonaTable Test Case
 */
class ZonaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZonaTable
     */
    protected $Zona;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Zona',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Zona') ? [] : ['className' => ZonaTable::class];
        $this->Zona = $this->getTableLocator()->get('Zona', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Zona);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ZonaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
