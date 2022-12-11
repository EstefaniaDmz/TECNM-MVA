<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TiposangreTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TiposangreTable Test Case
 */
class TiposangreTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TiposangreTable
     */
    protected $Tiposangre;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tiposangre',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tiposangre') ? [] : ['className' => TiposangreTable::class];
        $this->Tiposangre = $this->getTableLocator()->get('Tiposangre', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tiposangre);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TiposangreTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
