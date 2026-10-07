<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;
use Throwable;

class Health extends BaseController
{
    public function index(): ResponseInterface
    {
        try {
            db_connect()->query('SELECT 1');

            return $this->response->setJSON([
                'status'   => 'ok',
                'database' => 'connected',
            ]);
        } catch (Throwable $exception) {
            log_message('error', 'Database health check failed: {message}', [
                'message' => $exception->getMessage(),
            ]);

            return $this->response
                ->setStatusCode(503)
                ->setJSON([
                    'status'   => 'unavailable',
                    'database' => 'disconnected',
                ]);
        }
    }
}
