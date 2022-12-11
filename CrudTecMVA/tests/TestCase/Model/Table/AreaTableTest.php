<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AreaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AreaTable Test Case
 */
class AreaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AreaTable
     */
    protected $Area;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Area',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Area') ? [] : ['className' => AreaTable::class];
        $this->Area = $this->getTableLocator()->get('Area', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Area);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AreaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
