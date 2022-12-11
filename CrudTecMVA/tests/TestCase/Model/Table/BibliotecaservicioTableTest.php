<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BibliotecaservicioTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BibliotecaservicioTable Test Case
 */
class BibliotecaservicioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\BibliotecaservicioTable
     */
    protected $Bibliotecaservicio;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Bibliotecaservicio',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Bibliotecaservicio') ? [] : ['className' => BibliotecaservicioTable::class];
        $this->Bibliotecaservicio = $this->getTableLocator()->get('Bibliotecaservicio', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Bibliotecaservicio);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\BibliotecaservicioTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
