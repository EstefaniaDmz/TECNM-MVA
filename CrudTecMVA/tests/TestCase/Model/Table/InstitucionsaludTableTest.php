<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InstitucionsaludTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InstitucionsaludTable Test Case
 */
class InstitucionsaludTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InstitucionsaludTable
     */
    protected $Institucionsalud;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Institucionsalud',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Institucionsalud') ? [] : ['className' => InstitucionsaludTable::class];
        $this->Institucionsalud = $this->getTableLocator()->get('Institucionsalud', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Institucionsalud);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InstitucionsaludTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
