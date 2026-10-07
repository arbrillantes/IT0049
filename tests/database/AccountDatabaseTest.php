<?php

use App\Models\CustomerModel;
use App\Models\UserModel;
use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\DatabaseTestTrait;
use CodeIgniter\Test\FeatureTestTrait;

/**
 * @internal
 */
final class AccountDatabaseTest extends CIUnitTestCase
{
    use DatabaseTestTrait;
    use FeatureTestTrait;

    protected $namespace = 'App';

    public function testMigrationCreatesInitialAccountData(): void
    {
        $customers = (new CustomerModel())->orderBy('id', 'ASC')->findAll();
        $users     = (new UserModel())->orderBy('id', 'ASC')->findAll();

        $this->assertCount(5, $customers);
        $this->assertCount(5, $users);
        $this->assertSame('Angelo.b@yahaa.com', $customers[0]['email']);
        $this->assertSame('admin01', $users[0]['username']);
    }

    public function testDatabaseBackedPagesAndHealthCheckAreAvailable(): void
    {
        $customers = $this->get('/customers');
        $customers->assertOK();
        $customers->assertSee('Angelo.b@yahaa.com');

        $users = $this->get('/users');
        $users->assertOK();
        $users->assertSee('admin01');

        $health = $this->get('/health');
        $health->assertOK();
        $health->assertJSONFragment([
            'status'   => 'ok',
            'database' => 'connected',
        ]);
    }
}
