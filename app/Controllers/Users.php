<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'admin01', 'full_name' => 'Angelo Brillantes', 'role' => 'Administrator'],
            ['username' => 'cashier01', 'full_name' => 'Rovic Bilbao', 'role' => 'Cashier'],
            ['username' => 'cashier02', 'full_name' => 'Reven Lhi', 'role' => 'Cashier'],
            ['username' => 'stock01', 'full_name' => 'Kathleen Daba', 'role' => 'Inventory Clerk'],
            ['username' => 'manager01', 'full_name' => 'Karl Brillantes', 'role' => 'Store Manager'],
        ];

        return view('users/index', [
            'title'  => 'User Accounts',
            'active' => 'users',
            'users'  => $users,
        ]);
    }
}
