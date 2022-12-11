<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OrganizacionTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OrganizacionTable Test Case
 */
class OrganizacionTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OrganizacionTable
     */
    protected $Organizacion;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Organizacion',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Organizacion') ? [] : ['className' => OrganizacionTable::class];
        $this->Organizacion = $this->getTableLocator()->get('Organizacion', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Organizacion);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\OrganizacionTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
