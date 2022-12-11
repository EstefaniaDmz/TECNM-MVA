<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EnfermeriaservicioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EnfermeriaservicioTable Test Case
 */
class EnfermeriaservicioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EnfermeriaservicioTable
     */
    protected $Enfermeriaservicio;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Enfermeriaservicio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Enfermeriaservicio') ? [] : ['className' => EnfermeriaservicioTable::class];
        $this->Enfermeriaservicio = $this->getTableLocator()->get('Enfermeriaservicio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Enfermeriaservicio);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\EnfermeriaservicioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
