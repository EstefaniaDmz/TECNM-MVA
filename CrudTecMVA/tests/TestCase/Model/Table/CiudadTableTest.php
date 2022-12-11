<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CiudadTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CiudadTable Test Case
 */
class CiudadTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CiudadTable
     */
    protected $Ciudad;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Ciudad',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Ciudad') ? [] : ['className' => CiudadTable::class];
        $this->Ciudad = $this->getTableLocator()->get('Ciudad', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Ciudad);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\CiudadTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
