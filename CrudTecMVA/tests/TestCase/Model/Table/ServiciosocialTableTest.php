<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ServiciosocialTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ServiciosocialTable Test Case
 */
class ServiciosocialTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ServiciosocialTable
     */
    protected $Serviciosocial;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Serviciosocial',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Serviciosocial') ? [] : ['className' => ServiciosocialTable::class];
        $this->Serviciosocial = $this->getTableLocator()->get('Serviciosocial', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Serviciosocial);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ServiciosocialTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
