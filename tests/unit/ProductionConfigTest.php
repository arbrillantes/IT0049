<?php

use CodeIgniter\Test\CIUnitTestCase;
use Config\App;
use Config\Database;

/**
 * @internal
 */
final class ProductionConfigTest extends CIUnitTestCase
{
    protected function tearDown(): void
    {
        putenv('DATABASE_URL');
        putenv('RENDER_EXTERNAL_URL');

        parent::tearDown();
    }

    public function testPostgreSqlUrlIsNormalizedForCodeIgniter(): void
    {
        putenv('DATABASE_URL=postgresql://simplepos:p%40ss@db.example.com:5432/simplepos?sslmode=require');

        $config = new Database();

        $this->assertSame(
            'Postgre://simplepos:p%40ss@db.example.com:5432/simplepos?sslmode=require',
            $config->default['DSN']
        );
        $this->assertSame('Postgre', $config->default['DBDriver']);
    }

    public function testRenderUrlBecomesThePublicBaseUrl(): void
    {
        putenv('RENDER_EXTERNAL_URL=https://simplepos-brillantes.onrender.com');

        $config = new App();

        $this->assertSame('https://simplepos-brillantes.onrender.com/', $config->baseURL);
    }
}
