<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AlumnocursomateriaTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AlumnocursomateriaTable Test Case
 */
class AlumnocursomateriaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AlumnocursomateriaTable
     */
    protected $Alumnocursomateria;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Alumnocursomateria',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Alumnocursomateria') ? [] : ['className' => AlumnocursomateriaTable::class];
        $this->Alumnocursomateria = $this->getTableLocator()->get('Alumnocursomateria', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Alumnocursomateria);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\AlumnocursomateriaTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
