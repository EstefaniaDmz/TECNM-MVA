<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SoftwareequipoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SoftwareequipoTable Test Case
 */
class SoftwareequipoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\SoftwareequipoTable
     */
    protected $Softwareequipo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Softwareequipo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Softwareequipo') ? [] : ['className' => SoftwareequipoTable::class];
        $this->Softwareequipo = $this->getTableLocator()->get('Softwareequipo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Softwareequipo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\SoftwareequipoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
