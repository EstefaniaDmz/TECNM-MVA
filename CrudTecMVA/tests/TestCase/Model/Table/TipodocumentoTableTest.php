<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TipodocumentoTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TipodocumentoTable Test Case
 */
class TipodocumentoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TipodocumentoTable
     */
    protected $Tipodocumento;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Tipodocumento',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Tipodocumento') ? [] : ['className' => TipodocumentoTable::class];
        $this->Tipodocumento = $this->getTableLocator()->get('Tipodocumento', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Tipodocumento);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\TipodocumentoTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
