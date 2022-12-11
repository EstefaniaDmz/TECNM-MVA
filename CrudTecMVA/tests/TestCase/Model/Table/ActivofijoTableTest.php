<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ActivofijoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ActivofijoTable Test Case
 */
class ActivofijoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ActivofijoTable
     */
    protected $Activofijo;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Activofijo',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Activofijo') ? [] : ['className' => ActivofijoTable::class];
        $this->Activofijo = $this->getTableLocator()->get('Activofijo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Activofijo);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ActivofijoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
