<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\AdminsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\AdminsController Test Case
 */
class AdminsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.admins',
        'app.companies',
        'app.options',
        'app.products',
        'app.categories',
        'app.answers',
        'app.users',
        'app.scores',
        'app.surveys',
        'app.questions'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
