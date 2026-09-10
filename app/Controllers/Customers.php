<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Angelo Brillantitos', 'email' => 'Angelo.b@yahaa.com', 'phone' => '99999999999'],
            ['full_name' => 'Rovic Bilbao', 'email' => 'Roc.b@yahaa.com', 'phone' => '88888888888'],
            ['full_name' => 'Francis Pertudo', 'email' => 'Francis.perts@yahaa.com', 'phone' => '77777777777'],
            ['full_name' => 'Kath Daba', 'email' => 'Kath.d@yahaa.com', 'phone' => '66666666666'],
            ['full_name' => 'Reven lhi', 'email' => 'Reven.lhi@yahaa.com', 'phone' => '55555555555'],
        ];

        return view('customers/index', [
            'title'     => 'Customer Accounts',
            'active'    => 'customers',
            'customers' => $customers,
        ]);
    }
}
